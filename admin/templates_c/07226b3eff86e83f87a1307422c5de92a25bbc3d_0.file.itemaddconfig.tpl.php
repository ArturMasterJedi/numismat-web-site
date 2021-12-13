<?php
/* Smarty version 3.1.39, created on 2021-08-27 18:03:15
  from 'C:\OpenServer\domains\numismat\admin\templates\itemaddconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6128feb3834fd3_64413691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07226b3eff86e83f87a1307422c5de92a25bbc3d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\itemaddconfig.tpl',
      1 => 1630076587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6128feb3834fd3_64413691 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Выберите категорию для товара</h2>
<div class="card-group">
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="card">
            <img class="card-img-top" src="/assets/img/category/<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h5>
            </div>
            <a class="btn btn-success" href="additem.php?id=<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=additem">Выбрать</a>
        </div>
    <?php
}
}
?>
</div><?php }
}
