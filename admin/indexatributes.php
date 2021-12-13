<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id'])) {
        $query = "SELECT id, name_atribut, photo_atribut FROM atributes WHERE id_category=" . $_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Error');
        $atributes = [];
        while ($next = mysqli_fetch_array($res)) {
            $atributes[] = array('id' => $next['id'], 'name' => $next['name_atribut'], 'photo' => $next['photo_atribut']);
        }
        $smarty_atr = new Smarty();
        $smarty_atr->assign('cat', $_GET['id']);
        $smarty_atr->assign('atributes', $atributes);
        $smarty_atr->assign('nameCategory', $_GET['name']);
        $content = $smarty_atr->fetch('indexatributes.tpl');
    } else {
        $content = '<h1>404 | PAGE NOT FOUND</h1>';
    }
    $smarty_admin->assign('title', 'Атрибуты категорий');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>