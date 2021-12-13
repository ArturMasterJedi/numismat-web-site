<?php
require_once 'header.php';
require_once 'comments.php';
$page = 'productinfo';

if (isset($_GET['id_item']) && !empty($_GET['id_item'])){
    $query = "SELECT meta_title, meta_description, meta_keywords, item_monets.name, type, colichestvo, category_id, atribut_id, kod_tovara, fulldescription, gurt, weight, diametr, year, country, type_monets, nominal, series, quality, chekan_type, price, material, photo.name AS photo FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item WHERE photo.main=1 AND item_monets.id=".$_GET['id_item'];
    $res = mysqli_query($dbc, $query) or die('Query Error 1');
    $next = mysqli_fetch_array($res);

    /*Инициализация*/
    $smarty_info = new Smarty();
    $smarty_info -> assign('name', $next['name']);
    $smarty_info -> assign('fulldescription', $next['fulldescription']);
    $smarty_info -> assign('type', $next['type']);
    $smarty_info -> assign('colichestvo', $next['colichestvo']);
    $smarty_info -> assign('category_id', $next['category_id']);
    $smarty_info -> assign('atribut_id', $next['atribut_id']);
    $smarty_info -> assign('price', $next['price']);
    $smarty_info -> assign('kod_tovara', $next['kod_tovara']);
    $smarty_info -> assign('main_photo', $next['photo']);

    $photoQuery = "SELECT name FROM photo WHERE main=0 AND id_item=".$_GET['id_item'];
    $resQuery = mysqli_query($dbc, $photoQuery) or die('Query Photo Error');
    $photo = [];
    while ($nextPhoto=mysqli_fetch_array($resQuery)){
        $photo[] = array('name'=>$nextPhoto['name'], 'main'=>$nextPhoto['main']);
    }

    /*---------------------------------Модули--------------------------------------*/
    $querySelectItemCarusel = "SELECT item_monets.id AS id, item_monets.name AS name, price, oldprice, salepercent, category_id, photo.name AS photo FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item WHERE photo.main=1 AND item_monets.category_id=".$next['category_id'];
    $resItemCarusel = mysqli_query($dbc, $querySelectItemCarusel) or die('Query Error');

    $selectedItem = [];
    while ($nextSelectItem = mysqli_fetch_array($resItemCarusel)) {
        $selectedItem[] = array('id' => $nextSelectItem['id'], 'name' => $nextSelectItem['name'], 'price' => $nextSelectItem['price'], 'oldprice' => $nextSelectItem['oldprice'], 'sale' => $nextSelectItem['salepercent'], 'photo' => $nextSelectItem['photo']);
    }

    $view = selectView($dbc);

    $smarty_info -> assign('photo', $photo);
    $smarty_info -> assign('view', $view);
    $smarty_info -> assign('selectItem', $selectedItem);
    $content = $smarty_info -> fetch('productinfo.tpl');
}else{
    echo 'error';
}
require_once 'main.php';
?>

