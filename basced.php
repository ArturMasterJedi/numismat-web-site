<?php
session_start();
//$_SESSION['basced'] = array();
/*Добавление товара в корзину*/
if (isset($_GET['id'], $_GET['mode']) && !empty($_GET['id']) && $_GET['mode']=='add'){
    $statusBasced = false;
    if (!isset($_SESSION['basced'])){
        $_SESSION['basced'] = array();
    }
    /*Добавление товара в корзину если такой уже там есть*/
    if (count($_SESSION['basced']) > 0){
        for ($i = 0; $i < count($_SESSION['basced']); $i++){
            if ($_SESSION['basced'][$i]['id'] == $_GET['id']){
                $_SESSION['basced'][$i]['count']++;
                $statusBasced = true;
                break;
            }
        }
    }
    /*Добавление товара в корзину если такого там нету*/
    if (!$statusBasced){
        require_once 'admin/param.php';
        $queryBasced = "SELECT item_monets.name AS name, price, kod_tovara, photo.name AS photo FROM item_monets INNER JOIN photo ON photo.id_item=item_monets.id WHERE photo.main=1 AND item_monets.id=".$_GET['id'];
        $resBasced = mysqli_query($dbc, $queryBasced) or die('Query Basced Error');
        $nextBasced = mysqli_fetch_array($resBasced);

        $_SESSION['basced'][] = array('id'=>$_GET['id'], 'name'=>$nextBasced['name'], 'price'=>$nextBasced['price'], 'kod_tovara'=>$nextBasced['kod_tovara'], 'photo'=>$nextBasced['photo'], 'count' => 1);
    }
}
/*Очистка(полная) корзины товаров*/
if (isset($_GET['mode']) && $_GET['mode'] == 'clear'){
    if (isset($_SESSION['basced'])) {
        unset($_SESSION['basced']);
        $_SESSION['basced'] = array();
    }
}
/*Удаление определённого товара из корзины*/
if (isset($_GET['id'], $_GET['mode'], $_SESSION['basced']) && !empty($_GET['id']) && $_GET['mode'] == 'del'){
    if (count($_SESSION['basced']) > 0){
        for ($i = 0; $i < count($_SESSION['basced']); $i++){
            if ($_SESSION['basced'][$i]['id'] == $_GET['id']){
                unset($_SESSION['basced'][$i]);
            }
        }
    }

    $item = array();
    foreach ($_SESSION['basced'] as $tmp){
        if (!empty($tmp)){
            $item[] = $tmp;
        }
    }

    unset($_SESSION['basced']);
    $_SESSION['basced'] = array();
    $_SESSION['basced'] = $item;
    unset($item);
}
/*Автопереходы с корзины*/
if (isset($_GET['script']) && !empty($_GET['script']) && $_GET['script'] == 'order'){
    header('location:basceditem.php');
}else{
    if (isset($_GET['page']) && !empty($_GET['page'])){
        header('location:indexitem.php?page='.$_GET['page']);
    }else{
        header('location:indexitem.php');
    }
}

?>