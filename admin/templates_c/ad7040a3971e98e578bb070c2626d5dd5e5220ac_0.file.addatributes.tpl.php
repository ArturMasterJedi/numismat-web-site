<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:04:44
  from 'C:\OpenServer\domains\numismat\admin\templates\addatributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128ff0c4fea03_49471248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7040a3971e98e578bb070c2626d5dd5e5220ac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\addatributes.tpl',
      1 => 1630076681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128ff0c4fea03_49471248 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Добавление атрибута категории</h2>
<form method="post" enctype="multipart/form-data" action="addatributes.php">
    <label>Выберите к какой категории относиться атрибут</label><br>
    <select name="categories">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <label>Введите название атрибута</label><br>
    <input type="text" name="name"><br>
    <label>Выберите фото атрибута</label><br>
    <input type="file" name="photo"><br>
    <input type="submit" class="btn btn-success" name="send"><br>
</form><?php }
}
