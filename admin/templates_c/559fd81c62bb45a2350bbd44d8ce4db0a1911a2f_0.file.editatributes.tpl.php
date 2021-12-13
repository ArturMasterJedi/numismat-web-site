<?php
/* Smarty version 3.1.39, created on 2021-10-25 19:02:56
  from 'C:\OpenServer\domains\numismat\admin\templates\editatributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6176d530d58eb8_73424340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559fd81c62bb45a2350bbd44d8ce4db0a1911a2f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\editatributes.tpl',
      1 => 1635177732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6176d530d58eb8_73424340 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="editatributes.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
    <label>Измените название</label><br>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
    <label>Измените категорию</label><br>
    <label>Выберите новую категорию</label><br>
    <select name="new_cat">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_cat']->value) {?>
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
            <?php }?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <label>Фото</label><br>
    <img src='../assets/img/atribut/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
' width="130px"><br><br>
    <label>Введите короткое название (Максимум 26 символов)</label><br>
    <input type="text" name="short_name" value="<?php echo $_smarty_tpl->tpl_vars['short_name']->value;?>
"><br>
    <h2>Загрузите новое фото</h2>
    <input type="hidden" name="oldphoto" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
    <input type="file" name="new_photo"><br>
    <input type="submit" class="btn btn-success" name="send" value="Отредактировать"><br>
</form><?php }
}
