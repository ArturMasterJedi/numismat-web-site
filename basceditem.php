<?php
require_once 'header.php';
$page = 'catalog';
require_once 'comments.php';

if (isset($_SESSION['basced']) && count($_SESSION['basced'])>0){
    if (isset($_POST['reorder'])){
        for ($s = 0; $s < count($_SESSION['basced']); $s++){
            $nameElement = 'count'.$_SESSION['basced'][$s]['id'];
            $_SESSION['basced'][$s]['count'] = $_POST[$nameElement];
        }
    }

    $shop = [];
    $totalSum = 0;
    $sum = 0;

    for ($i = 0; $i < count($_SESSION['basced']); $i++){
        $sum = $_SESSION['basced'][$i]['price'] * $_SESSION['basced'][$i]['count'];
        $query = "SELECT colichestvo FROM item_monets WHERE id=".$_SESSION['basced'][$i]['id'];
        $res = mysqli_query($dbc, $query) or die('Query Order Error');
        $next = mysqli_fetch_array($res);

        $shop[] = array('id'=>$_SESSION['basced'][$i]['id'], 'name'=>$_SESSION['basced'][$i]['name'], 'kod_tovara'=>$_SESSION['basced'][$i]['kod_tovara'], 'photo'=>$_SESSION['basced'][$i]['photo'], 'price'=>$_SESSION['basced'][$i]['price'], 'count'=>$_SESSION['basced'][$i]['count'], 'colichestvo'=>$next['colichestvo']);
        $totalSum+=$sum;
    }
}

$view = selectView($dbc);

$smarty_basced = new Smarty();
$smarty_basced -> assign('selectItem', selectItem($dbc, null, null));
$smarty_basced -> assign('selectItemSale', selectItem($dbc, null, 'sale'));
$smarty_basced -> assign('shop', $shop);
$smarty_basced -> assign('totalSum', $totalSum);
$smarty_basced -> assign('view', $view);

$content = $smarty_basced -> fetch('basceditem.tpl');
require_once 'main.php';
?>