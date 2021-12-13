<?php
/* Smarty version 3.1.39, created on 2021-10-06 17:21:57
  from 'C:\OpenServer\domains\numismat\admin\templates\additem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615db1058b9f14_26934225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64c1718a823b2474427e2f103666ab20eef7a57' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\additem.tpl',
      1 => 1633530109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615db1058b9f14_26934225 (Smarty_Internal_Template $_smarty_tpl) {
?><br><h2>Добавление товара</h2>
<form class="addForm" method="post" enctype="multipart/form-data" action="additem.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&mode=additem">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <label>Введите название <small>(*обязательное поле)</small></label><br>
        <input type="text" name="name"><br>
        <label>Введите код товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="kod"><br>
        <label>Выберите тип товара <small>(*обязательное поле)</small></label><br>
        <select name="type">
            <option value="коллекционные монеты">коллекционные монеты</option>
            <option value="обиходные монеты">обиходные монеты</option>
            <option value="аксессуары">аксессуары</option>
            <option value="другое">другое</option>
        </select><br>
        <label>Введите страну <small>(*обязательное поле)</small></label><br>
        <input type="text" name="country"><br>
        <label>Введите цену товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="price"><br>
        <label>Введите старую цену товара до скидки</label><br>
        <input type="text" name="oldprice"><br>
        <label>Выберите подтип товара данной категории <small>(*обязательное поле)</small></label><br>
        <select name="atribut">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['atribut']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['atribut']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atribut']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
            <?php
}
}
?>
        </select><br>
        <label>Введите количество данного товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="colichestvo"><br>
        <label>Добавьте описание к товару</label><br>
        <textarea name="fulldescription"></textarea><br>
        <label>Введите тираж товара</label><br>
        <input type="text" name="tirazh"><br>
        <label>Введите материал с которого изготовлен товар</label><br>
        <input type="text" name="material"><br>
        <label>Введите вес товара</label><br>
        <input type="text" name="weight"><br>
        <label>Введите диаметр товара</label><br>
        <input type="text" name="diametr"><br>
        <label>Введите номинал</label><br>
        <input type="text" name="nominal"><br>
        <label>Введите серию монеты</label><br>
        <input type="text" name="series"><br>
        <label>Выберите тип гурта</label><br>
        <select name="gurt">
            <option value="null" selected>Не выбрано</option>
            <option value="Рифлёный">Рифлёный</option>
            <option value="Гладкий">Гладкий</option>
            <option value="Надпись">Надпись</option>
        </select><br>
        <label>Введите год выпуска</label><br>
        <input type="text" name="year"><br>
        <label>Выберите состояние</label><br>
        <select name="sostoyaniye">
            <option value="null" selected>Не выбрано</option>
            <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
            <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
            <option value="XF - Отличное">XF -  Отличное</option>
            <option value="VF - Хорошее">VF -  Хорошее</option>
            <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
            <option value="G - Удовлетворительное">G -  Плохое</option>
        </select><br>
        <label>Введите тип чеканки монеты</label><br>
        <input type="text" name="chekan"><br>
        <br><h3>Добавьте фото к товару</h3><br>
        <label>Выберите главное фото товара <small>(*обязательное поле)</small></label><br>
        <input type="file" name="main_photo"><br>
        <label>Выберите другие фото товара</label><br>
        <input type="file" name="photos[]" multiple="multiple"><br>
        <input type="submit" name="send" value="Добавить" class="btn btn-success">
    </form>
<?php }
}
