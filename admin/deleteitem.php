<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])){
        $query = "SELECT id, name FROM photo WHERE id_item=".$_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Error');

        $photo = [];
        while ($next=mysqli_fetch_array($res)){
            $photo[] = array('id'=>$next['id'], 'name'=>$next['name']);
        }
        $smarty_delete = new Smarty();
        $smarty_delete -> assign('id', $_GET['id']);
        $smarty_delete -> assign('model', $_GET['model']);
        $smarty_delete -> assign('photos', $photo);
        $content = $smarty_delete -> fetch('deleteitem.tpl');
    }elseif (isset($_POST['send'], $_POST['id'], $_POST['cid']) && !empty($_POST['id']) && $_POST['cid']=='yes'){
        $queryPhoto = "SELECT name FROM photo WHERE id_item=".$_POST['id'];
        $resPhoto = mysqli_query($dbc, $queryPhoto) or die('Query Photo Error');
        while ($nextPhoto=mysqli_fetch_array($resPhoto)){
            unlink("../assets/img/item/{$nextPhoto['name']}");
        }
        $queryDeletePhoto = "DELETE FROM photo WHERE id_item=".$_POST['id'];
        mysqli_query($dbc, $queryDeletePhoto) or die('Query delete photo error');

        $queryDeleteItem = "DELETE FROM item_monets WHERE id=".$_POST['id'];
        mysqli_query($dbc, $queryDeleteItem) or die('Query delete item error');
        $content = 'Удаление успешно';
    }
    $smarty_admin -> assign('title', 'Удаление товара');
    $smarty_admin -> assign('content', $content);
    $smarty_admin -> display('main.tpl');
}else{
    header('location:404.html');
}
?>