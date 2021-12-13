<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $query = "SELECT name_atribut, photo_atribut FROM atributes WHERE id=" . $_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Error');
        $next = mysqli_fetch_array($res);

        $smarty_del = new Smarty();
        $smarty_del->assign('id', $_GET['id']);
        $smarty_del->assign('name', $next['name_atribut']);
        $smarty_del->assign('photo', $next['photo_atribut']);
        $content = $smarty_del->fetch('deleteatributes.tpl');
    } elseif (isset($_POST['send'], $_POST['id'], $_POST['cid']) && !empty($_POST['id']) && $_POST['cid'] == 'yes') {
        $queryDelete = "DELETE FROM atributes WHERE id=" . $_POST['id'];
        mysqli_query($dbc, $queryDelete) or die('Query Delete Error');
        $content = '<h3>Удаление произведено успешно</h3><br><a href="indexcategory.php">Назад</a>';
    } else {
        $content = 'Error';
    }

    $smarty_admin->assign('title', 'Удаление атрибута');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>