<?php
/* Smarty version 3.1.39, created on 2021-11-01 03:20:15
  from 'C:\OpenServer\domains\numismat\templates\orderready.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617f32bf362651_13524305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305b8185359d64356223494d27cec3f9c5afcd0f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\templates\\orderready.tpl',
      1 => 1635726012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617f32bf362651_13524305 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="basceditem.php">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2>Оформление заказа</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <div class="items">
                                <div class="product">
                                    <div class="row" style="padding: 10px">
                                        <div class="col-md-12">
                                            <h4 style="color: #343a40" class="col-md-12">1. Контактная информация</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Имя</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваше имя..." id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Телефон</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш телефон..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">e-mail</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш e-mail..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Ваша область</label>
                                            </div>
                                            <div class="col-auto">
                                                <select class="form-select" aria-label="Default select example" name="city">
                                                    <option value="1">Киевская обл.</option>
                                                    <option value="2">Харьковская обл.</option>
                                                    <option value="3">Днепропетровская обл.</option>
                                                    <option value="5">Оддеская обл.</option>
                                                    <option value="6">Запорожская обл.</option>
                                                    <option value="7">Львовская обл.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Город</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите ваш город..." id="inputPassword6" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top: 35px; margin-bottom: 35px">
                                            <h4 style="color: #343a40" class="col-md-12">2. Выберите способ доставки и оплаты </h4>
                                            <p style="text-decoration: underline">Доставка</p>
                                            <table class="form-control" border="1" style="border-spacing: 7px 11px">

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/novaposhta.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в квартиру, Нова Пошта</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">89 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/novaposhta.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Нова Пошта</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">60 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/og-logo.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Укр Почты</td>
                                                    <td>&nbsp;&nbsp;&nbsp;12/4/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">30 ₴</td>
                                                </tr>

                                                <tr>
                                                    <td><input class="radio" type="radio" name="magaz">&nbsp;</td>
                                                    <td><img src="/assets/img/logo/justin.png" width="25px">&nbsp;</td>
                                                    <td> Доставка в отделение, Justin</td>
                                                    <td>&nbsp;&nbsp;&nbsp;11/31/2021&nbsp;&nbsp;&nbsp;</td>
                                                    <td style="margin-right: 20%">30 ₴</td>
                                                </tr>
                                            </table>
                                            <div class="col-auto">
                                                <input type="text" placeholder="Введите номер отделения..." id="inputPassword6" class="form-control">
                                            </div>

                                            <br><p style="text-decoration: underline">Оплата</p>
                                            <div class="row">
                                                <span class="col-md-6"><input type="radio" name="1"><img src="/assets/img/logo/novaposhta.png" width="20px"> Наложенный платеж</span>
                                                <span class="col-md-6"><input type="radio" name="1"><img src="/assets/img/icon/cardbank.png" width="20px"> Оплата картой</span>
                                            </div>
                                            <br><br>
                                            <div class="row">
                                                <span style="text-decoration: underline; text-decoration-color: #ff962b"><input type="checkbox"> Мне можно не перезванивать для оформления заказа</span>
                                            </div>
                                        </div>
                                    </div>




                                    <div>
                                        <h5><pre>   Заказанные товары</pre></h5>
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr style="font-size: 12px">
                                                    <th id="photoOrder" scope="col">Фото</th>
                                                    <th scope="col">Название</th>
                                                    <th scope="col">Количество</th>
                                                    <th scope="col">Стоимость</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['itemOrder']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                <tr>
                                                    <td  id="photoOrder"><img src='/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['itemOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
' width="60px"></td>
                                                    <td><p><?php echo $_smarty_tpl->tpl_vars['itemOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</p></td>
                                                    <td><p><?php echo $_smarty_tpl->tpl_vars['itemOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</p></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['itemOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['sum'];?>
 ₴</td>
                                                </tr>
                                            <?php
}
}
?>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Общая стоимость - <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 ₴</b>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>Summary</h3>
                            <div class="summary-item"><span class="text">Сумма за товар(ы)</span><span class="price">₴<?php echo $_smarty_tpl->tpl_vars['totalSum']->value;?>
</span></div>
                            <div class="summary-item"><span class="text">Скидка по промокоду</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Доставка</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Сумма заказа</span><span class="price">₴<?php echo $_smarty_tpl->tpl_vars['totalSum']->value;?>
</span></div>
                            <br>
                            <a href="orderready.php" class="btn btn-outline-warning">Подтвердить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr/>
                <h2>СПЕЦПРЕДЛОЖЕНИЕ ДЛЯ ВАС!</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <div class="item">
                            <div class="pad15">
                                <div class="imgCarusel">
                                    <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['selectItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
">
                                </div>
                                <hr>
                                <div class="nameCarusel">
                                    <p><STRONG><?php echo $_smarty_tpl->tpl_vars['selectItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</STRONG></p>
                                </div>
                                <p>₴ <?php echo $_smarty_tpl->tpl_vars['selectItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'] > 0) {?>
                                    <p style="font-size: 18px; color: #ff0000">-<?php echo $_smarty_tpl->tpl_vars['selectItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'];?>
% off</p>
                                <?php } else { ?>
                                    <p style="font-size: 18px; color: #FFFFFF">-</p>
                                <?php }?>
                                <a class="btn btn-warning" href="productinfo.php?id_item=<?php echo $_smarty_tpl->tpl_vars['selectItem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Смотреть</a>
                            </div>
                        </div>
                    <?php
}
}
?>
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: -60px">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr/>
                <h2>Распродажа монет со скидкой до 95%</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItemSale']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <div class="item">
                            <div class="pad15">
                                <div class="imgCarusel">
                                    <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
">
                                </div>
                                <hr>
                                <div class="nameCarusel">
                                    <p><STRONG><?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</STRONG></p>
                                </div>
                                <p>₴ <?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</p>
                                <p style="font-size: 18px; color: #ff0000">-<?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'];?>
% off</p>
                                <a class="btn btn-warning" href="productinfo.php?id_item=<?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Смотреть</a>
                            </div>
                        </div>
                    <?php
}
}
?>
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: -60px">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr/>
                <h2>Недавно просмотренные товары</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
$__section_k_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['view']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_3_total = $__section_k_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_3_total !== 0) {
for ($__section_k_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_3_iteration <= $__section_k_3_total; $__section_k_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <div class="item">
                            <div class="pad15">
                                <div class="imgCarusel">
                                    <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
">
                                </div>
                                <hr>
                                <div class="nameCarusel">
                                    <p><STRONG><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</STRONG></p>
                                </div>
                                <p>₴ <?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</p>
                                <?php if ($_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'] > 0) {?>
                                    <p style="font-size: 18px; color: #ff0000">-<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'];?>
% off</p>
                                <?php } else { ?>
                                    <p style="font-size: 18px; color: #FFFFFF">-</p>
                                <?php }?>
                                <a class="btn btn-warning" href="productinfo.php?id_item=<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Смотреть</a>
                            </div>
                        </div>
                    <?php
}
}
?>
                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>
</section>
<?php }
}
