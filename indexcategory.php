<?php
require_once 'header.php';
$page = 'catalog';
if (!isset($_GET['id_category'])){
    $querySelectCategory = "SELECT id, name, photo_category FROM category";
    $resSelectCategory = mysqli_query($dbc, $querySelectCategory) or die('Query Select Category ERROR');
    $category = [];
    while ($fetchResultCategory=mysqli_fetch_array($resSelectCategory)){
        $category[] = array('id'=>$fetchResultCategory['id'], 'name'=>$fetchResultCategory['name'], 'photo_category'=>$fetchResultCategory['photo_category']);
    }
}
$smarty_main -> assign('title', 'Категории');
$smarty_main -> assign('content', $content);
$smarty_main ->display('main.tpl');
require_once 'main.php';
?>