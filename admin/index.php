<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {

    function percentSale($price, $oldPrice){
        $onePercent = $oldPrice/100;
        $totalPercent = ceil(100-($price/$onePercent));
        return $totalPercent;
    }
    echo percentSale(100, 150);


    $smarty_index = new Smarty();
    $content = $smarty_index->fetch('index.tpl');
    $smarty_admin->assign('content', $content);
    $smarty_admin->assign('title', 'Добро пожаловать в панель администратора');
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>
