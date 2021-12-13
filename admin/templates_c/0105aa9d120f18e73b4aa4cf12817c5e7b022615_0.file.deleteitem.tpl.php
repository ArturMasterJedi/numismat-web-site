<?php
/* Smarty version 3.1.39, created on 2021-08-28 00:26:59
  from 'C:\OpenServer\domains\numismat\admin\templates\deleteitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612958a3bcf6c5_58018014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0105aa9d120f18e73b4aa4cf12817c5e7b022615' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\deleteitem.tpl',
      1 => 1630099613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612958a3bcf6c5_58018014 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Удаление товара целеком</h2>
<form method="post" action="deleteitem.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">
    <label>Вы действительно хотите удалить?</label><br>
    <input type="radio" name="cid" value="yes" checked> Да<br>
    <input type="radio" name="cid" value="no"> Нет<br>
    <input type="submit" name="send" value="Удалить">
</form>
<h3>Удаление фотографий товара</h3>
    <table class="table">
        <tr>
            <th>Фото</th>
            <th>Управление</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
                <td><img src='/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
' width="100px"></td>
                <td><a class="btn btn-danger" href="deletephoto.php?id_photo=<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&id_item=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&model=<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">Удалить фото</a></td>
            </tr>
        <?php
}
}
?>
    </table>
<?php }
}
