<?php
require_once 'header.php';
require_once 'comments.php';
$page = 'main';
$selectItemSale = selectItem($dbc, null, 'sale');

/*----------------------------Category for site menu*/
$queryCategory = "SELECT id, name, photo_category FROM category";
$resCategory = mysqli_query($dbc, $queryCategory) or die('query error category');
$category = [];
while($nextCategory=mysqli_fetch_array($resCategory)){
    $category[] = array('id' => $nextCategory['id'], 'name' => $nextCategory['name'], 'photo'=>$nextCategory['photo_category']);
}

$smarty_in = new Smarty();
$smarty_in -> assign('selectItemSale', $selectItemSale);
$smarty_in -> assign('category', $category);
$content = $smarty_in -> fetch('index.tpl');
require_once 'main.php';
?>