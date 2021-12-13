<?php
require_once 'header.php';
$page = 'catalog';
require_once 'comments.php';

/*----------------------------Category for site menu*/
$queryCategory = "SELECT id, name, photo_category FROM category";
$resCategory = mysqli_query($dbc, $queryCategory) or die('query error category');
$category = [];
while($nextCategory=mysqli_fetch_array($resCategory)){
    $category[] = array('id' => $nextCategory['id'], 'name' => $nextCategory['name'], 'photo'=>$nextCategory['photo_category']);
}
/*Atribute*/
$queryAtribute = "SELECT id, name_atribut, id_category, photo_atribut FROM atributes";
$resAtribute = mysqli_query($dbc, $queryAtribute) or die('Query Error atribut');
$atribute = [];
while($nextAtribut=mysqli_fetch_array($resAtribute)){
    $atribute[] = array('id_cat'=>$nextAtribut['id_category'], 'id'=>$nextAtribut['id'], 'name'=>$nextAtribut['name_atribut'], 'photo'=>$nextAtribut['photo_atribut']);
}
/*Получение фильтров для страницы*/


/*Получение данных для пагинации*/
$contItemPag = 20;
$querySelectIdItem = "SELECT id FROM item_monets";
$resSelectIditem = mysqli_query($dbc, $querySelectIdItem) or die('Query select id item error');
$sumItems = mysqli_num_rows($resSelectIditem);
$countItems = ceil($sumItems/$contItemPag);

if (isset($_GET['page'])){
    $aktivPage = $_GET['page'];
}else{
    $aktivPage = 1;
}
$skipPageFormula = ($aktivPage-1)*$contItemPag;

/*Сортировка*/
if (isset($_GET['sortprice'])){
    $sortPrice = $_GET['sortprice'];
    switch ($sortPrice){
        case "ASC":
            $sortPrice = "DESC";
            break;
        case "DESC":
            $sortPrice = "ASC";
            break;
        default:
            $sortPrice = "DESC";
            break;
    }
    $querySelectItem = "SELECT item_monets.id, item_monets.name, price, photo.name AS photo, photo.main AS main FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item ORDER BY price $sortPrice";
}elseif (isset($_GET['sortmodel'])) {
    $sortModel = $_GET['sortmodel'];
    switch ($sortModel) {
        case 'ASC':
            $sortModel = 'DESC';
            break;
        case 'DESC';
            $sortModel = 'ASC';
            break;
        default:
            $sortModel = 'DESC';
            break;
    }
    $querySelectItem = "SELECT item_monets.id, item_monets.name, price, photo.name AS photo FROM item_monets INNER JOIN photo, photo.main AS main ON item_monets.id=photo.id_item ORDER BY name $sortModel";
}elseif (isset($_GET['sortnew'])){
    $sortNew = $_GET['sortnew'];
    switch ($sortNew){
        case "ASC":
            $sortNew = "DESC";
            break;
        case "DESC":
            $sortNew = "ASC";
            break;
        default:
            $sortNew = "DESC";
            break;
    }
    $querySelectItem = "SELECT item_monets.id, item_monets.name, price, oldprice, salepercent, photo.name AS photo, photo.main AS main FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item";

}else{
    $querySelectItem = "SELECT item_monets.id, item_monets.name, price, oldprice, salepercent, photo.name AS photo, photo.main AS main FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item";
}


/*Фильтр по категории*/
if (isset($_GET['id_category']) && !empty($_GET['id_category'])){
    $querySelectItem.=" AND category_id=".$_GET['id_category'];
}elseif (isset($_GET['id_atribute']) && !empty($_GET['id_atribute'])){
    $querySelectItem.=" AND atribut_id=".$_GET['id_atribute'];
}

/*Поиск*/
if (isset($_GET['search']) && !empty($_GET['search'])){
    $search1 = $_GET['search'];
    $search = str_replace(',' ,' ', $search1);
    $words = explode(' ', $search);
}

$arr_words = [];
if (count($words) > 0) {
    foreach ($words as $tmp) {
        if (!empty($words)){
            $arr_words[] = $tmp;
        }
    }
}

$final_words = [];
if (count($arr_words)>0){
    foreach ($arr_words as $tmp){
        array_push( $final_words," item_monets.name LIKE '%$tmp%' ");
    }
}

$result_words = implode('OR', $final_words);
if (!empty($result_words)){
    $querySelectItem.=" WHERE $result_words";
}
$querySelectItem.=" HAVING photo.main=1";
$querySelectItem.=" LIMIT {$skipPageFormula}, {$contItemPag}";
/*End Search*/

$resSelectItem = mysqli_query($dbc, $querySelectItem) or die('Query Error');
$item = [];
while ($next=mysqli_fetch_array($resSelectItem)){
    $item[] = array('id'=>$next['id'], 'name'=>$next['name'], 'price'=>$next['price'], 'photo'=>$next['photo'], 'oldprice'=>$next['oldprice'], 'saleperc'=>$next['salepercent']);
}
$p = [];
for ($i = 1; $i<=$countItems; $i++){
    $p[] = array('pag'=>$i);
}

/*---------------Коментарии НАЧАЛО----------------*/
$comment = selectComment($dbc);

if (isset($_POST['postComment'], $_POST['name_comment'], $_POST['text_comment'], $_POST['email_comment']) && !empty($_POST['name_comment']) && !empty($_POST['text_comment']) && !empty($_POST['email_comment'])){
    commentAdd($dbc, $_POST['name_comment'], $_POST['text_comment'], $_POST['email_comment']);
}
/*---------------Коментарии КОНЕЦ----------------*/

/*Просмотренные*/
$view = selectView($dbc);

$smarty_index = new Smarty();
$smarty_index -> assign('item', $item);
$smarty_index -> assign('pag', $p);
$smarty_index -> assign('view', $view);
$smarty_index -> assign('selectItem', selectItem($dbc, null, null));
$smarty_index -> assign('selectItemSale', selectItem($dbc, null, 'sale'));
$smarty_index -> assign('sortPrice', $sortPrice);
$smarty_index -> assign('sortModel', $sortModel);
$smarty_index -> assign('atribute', $atribute);
$smarty_index -> assign('category', $category);
$smarty_index -> assign('count', $countItems);
$smarty_index -> assign('comment', $comment);
$smarty_index -> assign('aktivpage', $aktivPage);
$content = $smarty_index -> fetch('indexitem.tpl');

require_once 'main.php';
?>