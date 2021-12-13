<?php
/* Smarty version 3.1.39, created on 2021-08-26 16:42:07
  from 'C:\OpenServer\domains\numismat\admin\templates\loginform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61279a2f54b916_48675322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6d34bbef37ccaac07cae5639d9d4093d6e21ec7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\loginform.tpl',
      1 => 1629985325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61279a2f54b916_48675322 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="post" class="loginForm">
    <input type="text" name="login" placeholder="Введите ваш логин"><br><br>
    <input type="password" name="pass" placeholder="Введите ваш пароль"><br>
    <input type="submit" name="send" value="Войти" class="btn btn-success" id="login"><br>
</form><?php }
}
