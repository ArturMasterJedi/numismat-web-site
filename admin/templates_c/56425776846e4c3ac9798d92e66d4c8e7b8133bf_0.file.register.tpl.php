<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:07:49
  from 'C:\OpenServer\domains\numismat\admin\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128ffc556f7d5_07684328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56425776846e4c3ac9798d92e66d4c8e7b8133bf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\register.tpl',
      1 => 1630076587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128ffc556f7d5_07684328 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<form method="post" action="register.php">
    <h2>Регистрация пользователя админ-панели</h2>
    <label>Введите имя пользователя</label><br>
    <input type="text" name="user_name"><br>
    <label>Введите логин</label><br>
    <input type="text" name="login"><br>
    <label>Введите пароль</label><br>
    <input type="password" name="pass"><br>
    <label>Подтвердите пароль</label><br>
    <input type="password" name="repass"><br>
    <label>Введите номер мобильного телефна</label><br>
    <input type="text" name="phone"><br>
    <label>Введите E-MAIL</label><br>
    <input type="email" name="email"><br><br>
    <label>Выберите права для пользователя</label><br>
    <input type="radio" value="0" name="cid" checked> <label> Оператор </label>
    <input type="radio" value="1" name="cid"> <label> Администратор </label><br>
    <input class="btn btn-success" type="submit" name="send" value="Зарегестрировать"><br>
</form><?php }
}
