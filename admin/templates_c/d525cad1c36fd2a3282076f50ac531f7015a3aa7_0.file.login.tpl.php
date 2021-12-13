<?php
/* Smarty version 3.1.39, created on 2021-08-26 16:37:33
  from 'C:\OpenServer\domains\numismat\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6127991d88bce7_13579311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd525cad1c36fd2a3282076f50ac531f7015a3aa7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\login.tpl',
      1 => 1629985051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6127991d88bce7_13579311 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/darkadmin.css">
    <?php echo '<script'; ?>
 src="/assets/scripts/bootstrap.bundle.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="/assets/img/icon/iconadmin.png">
</head>
<body class="bodyLogin">
<section class="login">
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</section>
</body>
</html><?php }
}
