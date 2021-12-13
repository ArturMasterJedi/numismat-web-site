<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    $query = "SELECT id, name, photo_category FROM category";
    $res = mysqli_query($dbc, $query);
    $category = [];
    while ($next = mysqli_fetch_array($res)) {
        $category[] = array('id' => $next['id'], 'name' => $next['name'], 'photo' => $next['photo_category']);
    }
    $smarty_index = new Smarty();
    $smarty_index->assign('category', $category);
    $content = $smarty_index->fetch('indexcategory.tpl');

    $smarty_admin->assign('title', 'Категории товаров');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>