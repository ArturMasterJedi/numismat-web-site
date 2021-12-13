<?php
session_start();

define('PATH_LIB', 'libs/');
require_once PATH_LIB.'Smarty.class.php';
require_once 'admin/param.php';
require_once 'comments.php';
$smarty_main = new Smarty();

$view = selectView($dbc);
?>