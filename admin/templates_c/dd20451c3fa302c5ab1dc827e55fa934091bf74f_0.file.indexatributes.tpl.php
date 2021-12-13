<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:15:11
  from 'C:\OpenServer\domains\numismat\admin\templates\indexatributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6129017fb8f2b1_77093789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd20451c3fa302c5ab1dc827e55fa934091bf74f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\indexatributes.tpl',
      1 => 1630076010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6129017fb8f2b1_77093789 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Атрибуты категории '<?php echo $_smarty_tpl->tpl_vars['nameCategory']->value;?>
'</h2><br>
<table class="table">
    <tr>
        <th>ID атрибуту</th>
        <th>Фото атрибута категории</th>
        <th>Товары атрибута</th>
        <th>Название атрибута</th>
        <th colspan="2">Управление</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['atributes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
            <td><img src='/assets/img/atribut/<?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="130px" height="130px"></td>
            <td>Товары данного атрибута<br><a class="btn btn-secondary" href="indexitem.php?id=<?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Смотреть</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><a class="btn btn-success" href="editatributes.php?id=<?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&category=<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
">Редактировать</a></td>
            <td><a class="btn btn-danger" href="deleteatributes.php?id=<?php echo $_smarty_tpl->tpl_vars['atributes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Удалить</a></td>
        </tr>
    <?php
}
}
?>
</table><?php }
}
