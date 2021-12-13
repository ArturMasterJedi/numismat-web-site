<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    /*Начало пагинации*/
    $zapis = 4;
    $queryZapis = "SELECT id FROM item_monets";
    //Проверяем есть ли в массиве GET поле 'search' если есть то тянем ID только похожих по названию товаров
    if (isset($_GET['search']) && !empty($_GET['search'])){
        $queryZapis.=" WHERE name LIKE '%".$_GET['search']."%'";
    }

    $resZapis = mysqli_query($dbc, $queryZapis) or die('Query Zapis Error');
    $sumPages = mysqli_num_rows($resZapis);
    $countPages = ceil($sumPages/$zapis);
    /*Создаем паременную $aktivPage которая будет отвечать какая сейчас страница*/
    if (isset($_GET['page'])){
        $aktivPage = $_GET['page'];
    }else{
        $aktivPage = 1;
    }
    /*Создаем формула для перехода на страницы*/
    $skipFormula = ($aktivPage-1)*$zapis;
    $query = "SELECT item_monets.id AS id_monets, price, item_monets.name AS name_monet, colichestvo, kod_tovara, photo.name AS photo_name FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item WHERE photo.main=1";
    /*Поиск начало*/
    if (isset($_GET['search'])){
        $search1 = $_GET['search'];
        $search = str_replace(',', ' ', $search1);
        $words = explode(' ', $search);
    }
    //Создаем вспомагательный массив для поиска
    $arr_words = array();
    if (count($words)>0){
        foreach ($words as $tmp){
            if (!empty($tmp)){
                $arr_words[] = $tmp;
            }
        }
    }
    $final_words = array();
    if (count($words)>0){
        foreach ($words as $tmp){
            array_push($final_words, " item_monets.name LIKE '%$tmp%'");
        }
    }
    $result_words = implode('OR', $final_words);
    if (!empty($result_words)){
        $query.=" AND $result_words";
    }
    /*Поиск конец*/
    $query.=" LIMIT $skipFormula, $zapis";
    $res = mysqli_query($dbc, $query) or die('Query Error');

    $item = [];
    while ($next=mysqli_fetch_array($res)){
        $item[] = array('id'=>$next['id_monets'], 'price'=>$next['price'],'name'=>$next['name_monet'], 'colichestvo'=>$next['colichestvo'], 'kod'=>$next['kod_tovara'], 'photo'=>$next['photo_name']);
    }
    /*Кнопки пагинации*/
    $pages = [];
    for ($i=1; $i <= $countPages; $i++){
        $pages[] = array('pag'=>$i);
    }

    $smarty_item = new Smarty();
    /*Передача данных пагинации в Smarty*/
    $smarty_item -> assign('pages', $pages);
    $smarty_item -> assign('aktiv', $aktivPage);
    $smarty_item -> assign('count', $countPages);
    /*----------------------------------*/
    $smarty_item -> assign('item', $item);
    $smarty_item -> assign('search', $_GET['search']);
    $content = $smarty_item -> fetch('indexitem.tpl');

    $smarty_admin -> assign('title', 'Товары');
    $smarty_admin -> assign('content', $content);
    $smarty_admin -> display('main.tpl');
}else{
    header('location:404.html');
}
?>
