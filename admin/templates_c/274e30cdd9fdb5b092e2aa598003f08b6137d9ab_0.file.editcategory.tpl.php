<?php
/* Smarty version 3.1.39, created on 2021-11-30 02:40:21
  from 'C:\OpenServer\domains\numismat\admin\templates\editcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a564e5ec23e0_58978738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '274e30cdd9fdb5b092e2aa598003f08b6137d9ab' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\editcategory.tpl',
      1 => 1635177004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a564e5ec23e0_58978738 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="editcategory.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
    <label>Измените название</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <label>Измените описание категории</label><br>
    <textarea name="description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea><br>
    <label>Измените короткое название (Максимум 23 символа)</label><br>
    <input type="text" name="short_name" value="<?php echo $_smarty_tpl->tpl_vars['short_name']->value;?>
"><br>
    <label>Фото</label><br>
    <img src='../assets/img/category/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
' width="130px"><br><br>
    <input type="submit" class="btn btn-success" name="send" value="Отредактировать"><br>
</form>
<br>
<form method="post" enctype="multipart/form-data" action="editcategory.php">
    <h2>Загрузите новое фото</h2>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="oldphoto" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
    <input type="file" name="new_photo"><br>
    <input class="btn btn-success" type="submit" name="sendnew" value="Изменить фото">
</form><?php }
}
