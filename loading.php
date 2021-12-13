<?php
require_once 'header.php';
require_once 'comments.php';
$page = 'catalog';
/*---------------Коментарии НАЧАЛО----------------*/
$comment = selectComment($dbc);

if (isset($_POST['postComment'], $_POST['name_comment'], $_POST['text_comment'], $_POST['email_comment']) && !empty($_POST['name_comment']) && !empty($_POST['text_comment']) && !empty($_POST['email_comment'])){
    commentAdd($dbc, $_POST['name_comment'], $_POST['text_comment'], $_POST['email_comment']);
    header('refresh:2; url='.$_SERVER['HTTP_REFERER']);
}
/*---------------Коментарии КОНЕЦ----------------*/

header('refresh:2; url='.$_SERVER['HTTP_REFERER']);

$smarty_loading = new Smarty();
$content = $smarty_loading -> fetch('loading.tpl');
require_once 'main.php';
?>