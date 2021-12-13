<?php
session_start();
if (isset($_COOKIE['login'])){
    setcookie('login', '', time() - 60 * 60 * 24 * 30 * 30);
}
if (isset($_COOKIE['user_name'])){
    setcookie('user_name', '', time()-60*60*24*30*30);
}
if (isset($_COOKIE['prava'])){
    setcookie('prava', '', time()-60*60*24*30*30);
}
session_destroy();
$_SESSION = [];
session_abort();
header('location:../index.php');
?>