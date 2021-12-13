<?php
require_once 'admin/myprotect.php';

function selectComment($DB){
    $comment = [];
    $querySelectComment = "SELECT id, name, comment_text, email, datetime FROM commentary ORDER BY datetime DESC LIMIT 0, 3";
    $res = mysqli_query($DB, $querySelectComment) or die('Query Select Comment Error');
    while ($next=mysqli_fetch_array($res)){
        $comment[] = array('id'=>$next['id'], 'name'=>$next['name'], 'text'=>$next['comment_text'], 'date'=>$next['datetime']);
    }

    return $comment;
}


function commentAdd($DB, $name, $commentText, $email){
    if (isset($name, $commentText, $email) && !empty($name) && !empty($commentText) && !empty($email)){
        $queryComment = "INSERT INTO commentary (name, comment_text, email, datetime) VALUES ('" . myProtect($name) . "', '" . myProtect($commentText) . "', '{$email}', now())";
        mysqli_query($DB, $queryComment) or die('Query Comment Error');
    }
}


function selectItem($DB, $id, $type){
    /*---------------------------------Модули--------------------------------------*/
    $querySelectItemCarusel = "SELECT item_monets.id AS id, item_monets.name AS name, price, oldprice, salepercent, category_id, photo.name AS photo FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item WHERE photo.main=1";

    switch ($type) {
        case 'sale':
            $querySelectItemCarusel.=" AND (salepercent)>0 ORDER BY salepercent DESC";
            break;
        case 'category':
            $querySelectItemCarusel.=" AND item_monets.category_id=".$id;
            break;
    }
    $querySelectItemCarusel.=" LIMIT 0,8";
    $resItemCarusel = mysqli_query($DB, $querySelectItemCarusel) or die('Query Error');
    $selectedItem = [];
    while ($nextSelectItem = mysqli_fetch_array($resItemCarusel)) {
        $selectedItem[] = array('id' => $nextSelectItem['id'], 'name' => $nextSelectItem['name'], 'price' => $nextSelectItem['price'], 'oldprice' => $nextSelectItem['oldprice'], 'sale' => $nextSelectItem['salepercent'], 'photo' => $nextSelectItem['photo']);
    }

    return $selectedItem;
}


function selectView($DB){
    /*----------------------View product START---------------------*/
    if (isset($_SESSION['view']) && !empty($_SESSION['view']) && count($_SESSION['view']) >= 6){
        $querySelectView = "SELECT id, product_id FROM viewed_page WHERE ip_client='{$_SERVER['REMOTE_ADDR']}'";
        $resSelectView = mysqli_query($DB, $querySelectView) or die('Query Select View Error');

        $viewIdItem = [];
        while ($nextView=mysqli_fetch_array($resSelectView)){
            $viewIdItem[] = array('id_item' => $nextView['product_id']);
        }

        $view = [];
        for ($i = 0; $i < count($viewIdItem); $i++) {
            $sqlView = "SELECT item_monets.id AS id, item_monets.name AS name, price, oldprice, salepercent, category_id, photo.name AS photo FROM item_monets INNER JOIN photo ON item_monets.id=photo.id_item WHERE photo.main=1 AND item_monets.id=" . $viewIdItem[$i]['id_item'];
            $resView = mysqli_query($DB, $sqlView) or die('Select Wiew Error');
            while ($selView = mysqli_fetch_array($resView)) {
                $view[] = array('id' => $selView['id'], 'name' => $selView['name'], 'price' => $selView['price'], 'oldprice' => $selView['oldprice'], 'sale' => $selView['salepercent'], 'photo' => $selView['photo']);
            }
        }
    }
    return $view;
    /*----------------------View product END---------------------*/
}
?>