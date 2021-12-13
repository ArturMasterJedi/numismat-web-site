<?php
session_start();
if (isset($_COOKIE['login'], $_COOKIE['prava'], $_COOKIE['user_name'])){
    $_SESSION['login'] = $_COOKIE['login'];
    $_SESSION['prava'] = $_COOKIE['prava'];
    $_SESSION['user_name'] = $_COOKIE['user_name'];
}
define('PATH_L', '../libs/');

require_once PATH_L.'Smarty.class.php';
require_once 'param.php';

$smarty_admin = new Smarty();
if ($_SESSION['prava'] == 1) {

    $prava = 'администратор';
} else {
    $prava = 'оператор';
}
$smarty_admin -> assign('prava', $prava);
$smarty_admin -> assign('theme', $_COOKIE['theme']);
?>
