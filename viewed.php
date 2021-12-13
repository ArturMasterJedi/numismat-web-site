<?php
session_start();
require_once 'admin/param.php';
if (isset($_GET['id_item']) && !empty($_GET['id_item'])) {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['REMOTE_ADDR'])){
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (!empty($ip)) {
        $querySelect = "SELECT id, ip_client, product_id FROM viewed_page";
        $resSelect = mysqli_query($dbc, $querySelect) or die('Query Select Error');

        $viewPage = [];
        while ($nextPage=mysqli_fetch_array($resSelect)){
            $viewPage[] = array('id'=>$nextPage['id'], 'ip'=>$nextPage['ip_client'], 'product_id'=>$nextPage['product_id']);
        }

        /*----------------Удаление первых елементов если количество больше лимита*/
        if (count($viewPage)>10){
            $count = count($viewPage);
            $num = 0;
            for ($k = count($viewPage)-1; $k >= 0; $k--){
                if ($k > count($viewPage)-10){
                    $num+=1;
                }else{
                    $queryDelView = "DELETE FROM viewed_page WHERE id=".$viewPage[$k]['id'];
                    mysqli_query($dbc, $queryDelView) or die('Query Del View Error');
                }
            }
        }

        $check = false;
        for ($i = 0; $i < count($viewPage); $i++){
            if ($viewPage[$i]['ip']==$ip && $viewPage[$i]['product_id']==$_GET['id_item']){
                $check = true;
                break;
            }
        }

        if (!$check){
            $queryAddView = "INSERT INTO viewed_page(ip_client, product_id) VALUES ('{$ip}', '{$_GET['id_item']}')";
            mysqli_query($dbc, $queryAddView) or die('Query Add View Error');
        }

        $_SESSION['view'] = $viewPage;
    }
}

header("location:productinfo.php?id_item={$_GET['id_item']}");
?>