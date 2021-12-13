<?php
/* Smarty version 3.1.39, created on 2021-09-29 17:27:19
  from 'C:\OpenServer\domains\numismat\admin\templates\deleteatributes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615477c7adb747_82757309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bcca95a7a36ab722527d64c6b4ffa217a46b070' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\deleteatributes.tpl',
      1 => 1630076681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615477c7adb747_82757309 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<div class="delForm">
    <h2>Удаление атрибута '<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
'</h2><br>
    <img src='/assets/img/atribut/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
' width="130px">
    <form method="post" action="deleteatributes.php">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <label><b>Вы действительно хотите удалить категорию?</b></label><br>
        <label>ДА</label><input type="radio" value="yes" name="cid" checked>
        <label>НЕТ</label><input type="radio" value="no" name="cid"><br><br>
        <input type="submit" class="btn btn-danger" name="send" value="Удалить атрибут">
    </form>
</div><?php }
}
