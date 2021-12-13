<?php
/* Smarty version 3.1.39, created on 2021-10-06 17:43:14
  from 'C:\OpenServer\domains\numismat\admin\templates\edititem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615db602bd3472_44208248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72bc551ebf8c748aa9afdd9fc9d18522505b31bf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\admin\\templates\\edititem.tpl',
      1 => 1633531392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615db602bd3472_44208248 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="edit">
<div>
    <form method="post" action="edititem.php" enctype="multipart/form-data">
        <h2>Изминение товара</h2><br>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <label>Измените название <small>(*обязательное поле)</small></label><br>
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><br>
        <label>Измените код товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="kod" value="<?php echo $_smarty_tpl->tpl_vars['kod_tovara']->value;?>
"><br>
        <!--Изменение типа монеты НАЧАЛО-->
        <label>Измените тип товара <small>(*обязательное поле)</small></label><br>
        <select name="type">
            <?php if ($_smarty_tpl->tpl_vars['type_monets']->value == "коллекционные монеты") {?>
                <option selected value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['type_monets']->value == "обиходные монеты") {?>
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option selected value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['type_monets']->value == "аксессуары") {?>
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option selected value="аксессуары">аксессуары</option>
                <option value="другое">другое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['type_monets']->value == "другое") {?>
                <option value="коллекционные монеты">коллекционные монеты</option>
                <option value="обиходные монеты">обиходные монеты</option>
                <option value="аксессуары">аксессуары</option>
                <option selected value="другое">другое</option>
            <?php }?>
        </select><br>
        <!--Изменение типа монеты КОНЕЦ-->
        <label>Измените страну <small>(*обязательное поле)</small></label><br>
        <input type="text" name="country" value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
"><br>
        <label>Измените цену товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"><br>
        <label>Введите старую цену товара до скидки</label><br>
        <input type="text" name="oldprice" value="<?php echo $_smarty_tpl->tpl_vars['oldprice']->value;?>
"><br>
        <label>Измените подтип товара данной категории <small>(*обязательное поле)</small></label><br>
        <select name="atribut">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['atr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['name_atribut']->value == $_smarty_tpl->tpl_vars['atr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']) {?>
                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['atr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['atr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
                <?php }?>
            <?php
}
}
?>
        </select><br>
        <label>Введите количество данного товара <small>(*обязательное поле)</small></label><br>
        <input type="text" name="colichestvo" value="<?php echo $_smarty_tpl->tpl_vars['colichestvo']->value;?>
"><br>
        <label>Добавьте описание к товару</label><br>
        <textarea name="fulldescription"><?php echo $_smarty_tpl->tpl_vars['fulldescription']->value;?>
</textarea><br>
        <label>Введите материал с которого изготовлен товар</label><br>
        <input type="text" name="material" value="<?php echo $_smarty_tpl->tpl_vars['material']->value;?>
"><br>
        <label>Введите вес товара</label><br>
        <input type="text" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['weight']->value;?>
"><br>
        <label>Введите диаметр товара</label><br>
        <input type="text" name="diametr" value="<?php echo $_smarty_tpl->tpl_vars['diametr']->value;?>
"><br>
        <label>Введите номинал</label><br>
        <input type="text" name="nominal" value="<?php echo $_smarty_tpl->tpl_vars['nominal']->value;?>
"><br>
        <label>Введите серию монеты</label><br>
        <input type="text" name="series" value="<?php echo $_smarty_tpl->tpl_vars['series']->value;?>
"><br>
        <!--Изменение гурта монеты НАЧАЛО-->
        <label>Измените тип гурта</label><br>
        <select name="gurt">
            <?php if ($_smarty_tpl->tpl_vars['gurt']->value == 'null') {?>
                <option value="null" selected>Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись">Надпись</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['gurt']->value == 'Рифлёный') {?>
                <option value="null">Не выбрано</option>
                <option value="Рифлёный" selected>Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись">Надпись</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['gurt']->value == 'Гладкий') {?>
                <option value="null">Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий" selected>Гладкий</option>
                <option value="Надпись">Надпись</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['gurt']->value == 'Надпись') {?>
                <option value="null">Не выбрано</option>
                <option value="Рифлёный">Рифлёный</option>
                <option value="Гладкий">Гладкий</option>
                <option value="Надпись" selected>Надпись</option>
            <?php }?>
        </select><br>
        <!--Изменение гурта монеты КОНЕЦ-->
        <label>Измените год выпуска</label><br>
        <input type="text" name="year" value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><br>
        <!--Изменение состояния монеты НАЧАЛО-->
        <label>Измените состояние</label><br>
        <select name="sostoyaniye">
            <?php if ($_smarty_tpl->tpl_vars['quality']->value == 'null') {?>
                <option value="null" selected>Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'UNC / АЦ - Не была в обращении  / Анциркулейтед') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед"selected>UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'AU - Почти не была в употреблении') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении" selected>AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'XF - Отличное') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное" selected>XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'VF - Хорошее') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее" selected>VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'VG - Удовлетворительное') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное" selected>VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное">G -  Плохое</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['quality']->value == 'G - Удовлетворительное') {?>
                <option value="null">Не выбрано</option>
                <option value="UNC / АЦ - Не была в обращении  / Анциркулейтед">UNC / АЦ - Не была в обращении  / Анциркулейтед</option>
                <option value="AU - Почти не была в употреблении">AU - Почти не была в употреблении</option>
                <option value="XF - Отличное">XF -  Отличное</option>
                <option value="VF - Хорошее">VF -  Хорошее</option>
                <option value="VG - Удовлетворительное">VG -  Удовлетворительное</option>
                <option value="G - Удовлетворительное" selected>G -  Плохое</option>
            <?php }?>
        </select><br>
        <!--Изменение состояния монеты КОНЕЦ-->
        <label>Измените тип чеканки монеты</label><br>
        <input type="text" name="chekan" value="<?php echo $_smarty_tpl->tpl_vars['chekan_type']->value;?>
"><br>
        <h4>Выберите новое главное фото товара</h4><br>
        <input type="file" name="newMain"><br>
        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['main'] == 1) {?>
                <input type="hidden" name="oldMain" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
">
            <?php } else { ?>
            <?php }?>
        <?php
}
}
?>
        <input type="submit" name="send" value="Отредактировать" class="btn btn-success">
    </form>
    <br><br>
    <form method="post" enctype="multipart/form-data" action="edititem.php">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="file" name="newPhotos[]" multiple="multiple"><br>
        <input type="submit" name="newSend" value="Загрузить другие фото" class="btn btn-success">
    </form>
</div>
<div>
    <table class="table">
        <tr><th>Старые фото товара</th></tr>
        <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['main'] == 1) {?>
                <tr>
                    <th>Главное фото</th>
                </tr>
                <tr>
                    <th><img width="60px" name="oldMain" src='/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
'></th>
                </tr>
                <tr>
                    <th>Другие фото товара</th>
                </tr>
                <tr>
            <?php } elseif ($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['main'] == 0) {?>
                <th><img width="70px" name="oldMain" src='/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
'></th>
            <?php }?>
            </tr>
        <?php
}
}
?>
    </table>
</div>
</section><?php }
}
