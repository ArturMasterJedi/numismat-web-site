<?php
/* Smarty version 3.1.39, created on 2021-11-30 02:40:59
  from 'C:\OpenServer\domains\numismat\admin\templates\addcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a5650b7ac214_23643099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81082218e98eecedf2b249902ee776be094326e7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\addcategory.tpl',
      1 => 1635177004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5650b7ac214_23643099 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Добавление категории</h2>
<form method="post" enctype="multipart/form-data">
    <h1>Добавление категории</h1><br>
    <label>Введите название категории</label><br>
    <input type="text" name="name"><br>
    <label>Описание категории</label><br>
    <textarea name="description"></textarea><br>
    <label>Введите короткое название (Максимум 23 символа)</label><br>
    <input type="text" name="short_name"><br>
    <label>Выберите фото категории</label><br>
    <input type="file" name="photo"><br>
    <input type="submit" name="send" value="Добавить категорию"><br>
</form><?php }
}
