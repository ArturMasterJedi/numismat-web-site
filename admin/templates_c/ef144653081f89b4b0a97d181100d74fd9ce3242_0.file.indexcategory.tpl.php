<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:03:09
  from 'C:\OpenServer\domains\numismat\admin\templates\indexcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128feadccf230_97749688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef144653081f89b4b0a97d181100d74fd9ce3242' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\indexcategory.tpl',
      1 => 1630076587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128feadccf230_97749688 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Категории товаров</h2>
<table class="table">
    <tr>
        <th>ID товара</th>
        <th>Фото категории</th>
        <th>Подкатегории</th>
        <th>Название категории</th>
        <th colspan="2">Управление</th>
    </tr>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
        <td><img src='/assets/img/category/<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="130px"></td>
        <td><a href="indexatributes.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Смотреть<br>подкатегории</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
        <td><a class="btn btn-success" href="editcategory.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></td>
        <td><a class="btn btn-danger" href="deletecategory.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Удалить</a></td>
    </tr>
    <?php
}
}
?>
</table><?php }
}
