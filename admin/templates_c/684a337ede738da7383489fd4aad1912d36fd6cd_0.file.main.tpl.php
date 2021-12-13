<?php
/* Smarty version 3.1.39, created on 2021-09-02 21:42:07
  from 'C:\OpenServer\domains\numismat\admin\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61311aff4aa183_27697771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '684a337ede738da7383489fd4aad1912d36fd6cd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\main.tpl',
      1 => 1630608121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61311aff4aa183_27697771 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/darkadmin.css">
    <?php echo '<script'; ?>
 src="/assets/scripts/bootstrap.bundle.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="/assets/img/icon/iconadmin.png">
</head>
<body>
<header>
    <img class="headerImg" src='/assets/img/icon/iconadmin.png' width="100px">
    <section class="adminText">
        <h1 class="adminNameShop">Numismat.com.ua</h1>
        <h3 class="adminWelcome">Добро пожаловать в админ панель</h3>
    </section>
</header>
<main class="main">
    <section class="menu_admin">
        <div class="vertical-menu">
            <a href="index.php" class="active">Панель администратора</a>
            <a href="indexcategory.php">Категории</a>
            <a href="indexitem.php">Ассортимент товаров</a>
            <?php $_prefixVariable1 = 'администратор';
$_smarty_tpl->_assignInScope('prava', $_prefixVariable1);
if ($_prefixVariable1) {?>
                <a href="register.php">Зарегестрировать</a>
            <?php }?>
            <a href="#">Заказы</a>
            <a id="adm">
                Вы вошли как <?php echo $_smarty_tpl->tpl_vars['prava']->value;?>

            </a>
            <a href="exit.php" class="exit">Выйти</a>
        </div>
    </section>
    <section class="content">
        <div class="topnav">
            <a class="active" href="../index.php">Главная страница сайта</a>
            <a href="addcategory.php">Добавить категорию</a>
            <a href="additem.php">Добавить товар</a>
            <a href="addatributes.php">Добавить атрибут категории</a>
            <div class="search-container">
                <form action="indexitem.php" method="get">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </section>
</main>
</body>
</html><?php }
}
