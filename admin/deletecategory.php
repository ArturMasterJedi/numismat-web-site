<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $query = "SELECT name, photo_category FROM category WHERE id=" . $_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Select Error');
        $next = mysqli_fetch_array($res);
        $smarty_del = new Smarty();
        $smarty_del->assign('id', $_GET['id']);
        $smarty_del->assign('name', $next['name']);
        $smarty_del->assign('photo', $next['photo_category']);
        $content = $smarty_del->fetch('deletecategory.tpl');
    } elseif (isset($_POST['send'], $_POST['cid'], $_POST['id']) && !empty($_POST['id']) && $_POST['cid'] == 'yes') {
        $queryDelete = "DELETE FROM category WHERE id=" . $_POST['id'];
        mysqli_query($dbc, $queryDelete) or die('Query Deleted Error');
        $content = '<h3>Удаление произведено успешно</h3><br><a href="indexcategory.php">Назад</a>';
    } else {
        $content = '<h3>Удаление произведено не успешно</h3><br><a href="indexcategory.php">Назад</a>';
    }
    $smarty_admin->assign('title', 'Удаление категории');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>
