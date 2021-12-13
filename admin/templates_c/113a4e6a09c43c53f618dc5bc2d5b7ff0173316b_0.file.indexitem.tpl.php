<?php
/* Smarty version 3.1.39, created on 2021-08-28 00:28:26
  from 'C:\OpenServer\domains\numismat\admin\templates\indexitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612958fad16837_31493483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '113a4e6a09c43c53f618dc5bc2d5b7ff0173316b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\indexitem.tpl',
      1 => 1630099704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612958fad16837_31493483 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Ассортимент товаров</h2>
<table class="table">
    <tr>
        <th>ID товара</th>
        <th>Фото товара</th>
        <th>Название</th>
        <th>Код товара</th>
        <th>Цена</th>
        <th>Количество</th>
        <th colspan="2">Управление</th>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['item']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
            <td><img src='/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="130px"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kod'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
/грн</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['colichestvo'];?>
</td>
            <td><a class="btn btn-success" href="edititem.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Редактировать</a></td>
            <td><a class="btn btn-danger" href="deleteitem.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&model=<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">Удалить</a></td>
        </tr>
    <?php
}
}
?>
</table>
<nav aria-label="...">
    <ul class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['aktiv']->value == 1) {?>
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Назад</a>
            </li>
        <?php } else { ?>
            <li class="page-item">
                <a class="page-link" href="indexitem.php?page=<?php echo ($_smarty_tpl->tpl_vars['aktiv']->value-1);?>
" tabindex="-1">Назад</a>
            </li>
        <?php }?>
        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'] == $_smarty_tpl->tpl_vars['aktiv']->value) {?>
                <li class="page-item disabled"><a class="page-link disabled" href="#"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
</a></li>
            <?php } else { ?>
                <li class="page-item"><a class="page-link" href="indexitem.php?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
</a></li>
            <?php }?>
        <?php
}
}
?>
        <?php if ($_smarty_tpl->tpl_vars['aktiv']->value == $_smarty_tpl->tpl_vars['count']->value) {?>
            <li class="page-item disabled">
                <a class="page-link" href="indexitem.php?page=<?php echo ($_smarty_tpl->tpl_vars['aktiv']->value+1);?>
">Вперёд</a>
            </li>
        <?php } else { ?>
            <li class="page-item">
                <a class="page-link" href="indexitem.php?page=<?php echo ($_smarty_tpl->tpl_vars['aktiv']->value+1);?>
">Вперёд</a>
            </li>
        <?php }?>
    </ul>
</nav><?php }
}
