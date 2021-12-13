<?php
/* Smarty version 3.1.39, created on 2021-11-01 16:42:37
  from 'C:\OpenServer\domains\numismat\templates\basceditem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617feecda3a020_90411773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f236b1cc5d032ce179d12cc7c5c616ca91b00510' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\templates\\basceditem.tpl',
      1 => 1635774156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617feecda3a020_90411773 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="bascedItem">
    <form method="post" action="basceditem.php">
    <section class="shopping-cart dark">
        <div class="container">
            <div class="block-heading">
                <h2>Корзина товаров</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                        <div class="items">
                            <?php if (count($_smarty_tpl->tpl_vars['shop']->value) == 0) {?>
                                <h2>Корзина товаров пустая...</h2>
                            <?php } elseif (count($_smarty_tpl->tpl_vars['shop']->value) > 0) {?>
                                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shop']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img width="100px" class="img-fluid mx-auto d-block image" src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a style="color: #f7810a" href="productinfo.php?id_item=<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a>
                                                            <div class="product-info">
                                                                <div>Код товара: <span class="value"><?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kod_tovara'];?>
</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label>Количество:</label>
                                                        <input id="quantity" type="number" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
" min="1" max="<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['colichestvo'];?>
" name="count<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="form-control quantity-input">

                                                    </div>
                                                    <div class="col-md-2 price">
                                                        <span>₴<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</span>
                                                    </div>
                                                    <div class="col-md-1 del">
                                                        <a style="color: #ff0000" href="basced.php?id=<?php echo $_smarty_tpl->tpl_vars['shop']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=del&script=order">Удалить</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <?php
}
}
?>
                            <?php }?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>Вместе</h3>
                            <div class="summary-item"><span class="text">Сумма за товар(ы)</span><span class="price">₴<?php echo $_smarty_tpl->tpl_vars['totalSum']->value;?>
</span></div>
                            <div class="summary-item"><span class="text">Скидка по промокоду</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Доставка</span><span class="price">₴0</span></div>
                            <div class="summary-item"><span class="text">Сумма заказа</span><span class="price">₴<?php echo $_smarty_tpl->tpl_vars['totalSum']->value;?>
</span></div>
                            <br>
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); position: relative">
                                <input class="btn btn-warning" type="submit" name="reorder" value="Пересчитать">
                                <a class="btn btn-warning" href="basced.php?mode=clear">Очистить</a>
                            </div>
                            <br>
                            <a href="orderready.php" class="btn btn-success btn-lg btn-block">Оформить заказ</a>
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
</section>
<?php }
}
