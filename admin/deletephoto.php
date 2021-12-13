<?php
if (isset($_GET['id_item']) && !empty($_GET['id_item'])){
    require_once 'header.php';
    $querySel = "SELECT name FROM photo WHERE id_item=".$_GET['id_item'];
    $res = mysqli_query($dbc, $querySel) or die('ERROR 1');
    $next = mysqli_fetch_array($res);

    unlink("../assets/img/item/{$next['name']}");
    $query = "DELETE FROM photo WHERE id=".$_GET['id_photo'];
    //echo $query;
    mysqli_query($dbc, $query) or die('Query Error');
}
header("location:deleteitem.php?id={$_GET['id_item']}&model={$_GET['model']}");
?>