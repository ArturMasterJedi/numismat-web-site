<?php
require_once 'header.php';
$page = 'catalog';
require_once 'comments.php';

if (!empty($_SESSION['basced']) && count($_SESSION['basced'])>0){
    $totalSum = 0;
    $outItem = [];

    for ($i = 0; $i < count($_SESSION['basced']); $i++) {
        $sum = $_SESSION['basced'][$i]['price']*$_SESSION['basced'][$i]['count'];
        $outItem[] = array('number' => $i+1, 'sum' => $sum,'id' => $_SESSION['basced'][$i]['id'], 'name' => $_SESSION['basced'][$i]['name'], 'price' => $_SESSION['basced'][$i]['price'], 'photo' => $_SESSION['basced'][$i]['photo'], 'count' => $_SESSION['basced'][$i]['count']);

        $totalSum+=$sum;
    }
}
$view = selectView($dbc);

$smarty_order = new Smarty();
$smarty_order -> assign('itemOrder', $outItem);
$smarty_order -> assign('total', $totalSum);
$smarty_order -> assign('selectItem', selectItem($dbc, null, null));
$smarty_order -> assign('selectItemSale', selectItem($dbc, null, 'sale'));
$content = $smarty_order -> fetch('orderready.tpl');
require_once 'main.php';
?>