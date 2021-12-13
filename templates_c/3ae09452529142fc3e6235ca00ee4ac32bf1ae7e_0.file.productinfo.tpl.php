<?php
/* Smarty version 3.1.39, created on 2021-11-10 17:33:30
  from 'C:\OpenServer\domains\numismat\templates\productinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618bd83a0ed1b9_87005250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae09452529142fc3e6235ca00ee4ac32bf1ae7e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\templates\\productinfo.tpl',
      1 => 1636554804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618bd83a0ed1b9_87005250 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['main_photo']->value;?>
" alt="">
                    </div>
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <div class="product-preview">
                        <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" alt="">
                    </div>
                    <?php
}
}
?>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['main_photo']->value;?>
" alt="">
                    </div>
                    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <div class="product-preview">
                            <img src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" alt="">
                        </div>
                    <?php
}
}
?>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s) | Add your review</a>
                    </div>
                    <div>
                        <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
                        <span class="product-available">In Stock</span>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['fulldescription']->value;?>
</p>


                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                    </div>

                    <ul class="product-btns">
                        <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="#">Headphones</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab2">Details</a></li>
                        <li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <!-- Rating -->
                                <div class="col-md-3">
                                    <div id="rating">
                                        <div class="rating-avg">
                                            <span>4.5</span>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 80%;"></div>
                                                </div>
                                                <span class="sum">3</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div style="width: 60%;"></div>
                                                </div>
                                                <span class="sum">2</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                            <li>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="rating-progress">
                                                    <div></div>
                                                </div>
                                                <span class="sum">0</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Rating -->

                                <!-- Reviews -->
                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name">John</h5>
                                                    <p class="date">27 DEC 2018, 8:0 PM</p>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="reviews-pagination">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        <form class="review-form">
                                            <input class="input" type="text" placeholder="Your Name">
                                            <input class="input" type="email" placeholder="Your Email">
                                            <textarea class="input" placeholder="Your Review"></textarea>
                                            <div class="input-rating">
                                                <span>Your Rating: </span>
                                                <div class="stars">
                                                    <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                    <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                    <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                    <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                    <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->





    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <br/><br/><br/>
            <hr/>
            <h2>Похожие товары</h2>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,2,4,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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
                                    <p>50% off</p>
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
    </section>
    <div class="row">
        <div class="col-md-12 text-center">
            <hr/>
            <h2>Распродажа монет со скидкой до 95%</h2>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="MultiCarousel" data-items="1,2,4,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <?php
$__section_k_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_3_total = $__section_k_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_3_total !== 0) {
for ($__section_k_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_3_iteration <= $__section_k_3_total; $__section_k_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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
                                    <p>₹ 6000</p>
                                    <p>50% off</p>
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

        <?php if (count($_smarty_tpl->tpl_vars['view']->value) > 5) {?>
            <div class="container" style="margin-top: -60px">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <hr>
                        <h2>Недавно просмотренные товары</h2>
                    </div>
                    <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                        <div class="MultiCarousel-inner">
                            <?php
$__section_k_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['view']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_4_total = $__section_k_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_4_total !== 0) {
for ($__section_k_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_4_iteration <= $__section_k_4_total; $__section_k_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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
        <?php }?>
    </section>

<style>
    .demo {
        width:  550px;
        height: 450px;
    }
    .lightSliderUl {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom:0;
        width: 750px;
        height: 750px;
    }
    .lightSliderLi {
        background: #fff;
        display: block;
        float: left;
        margin-right: 6px;
        cursor:pointer;
        height: 500px;
        padding: 10px;
    }
    .lightSliderImg {
        margin: auto;
        background: #fff;
        padding: 25px;
        display: block;
        width: 90%;
    }




    /*=========================================================
	08 -> PRODUCT DETAILS PAGE
===========================================================*/

    /*----------------------------*\
        Product view
    \*----------------------------*/

    #product-main-img .slick-prev {
        -webkit-transform: translateX(-15px);
        -ms-transform: translateX(-15px);
        transform: translateX(-15px);
        left: 15px;
    }

    #product-main-img .slick-next {
        -webkit-transform: translateX(15px);
        -ms-transform: translateX(15px);
        transform: translateX(15px);
        right: 15px;
    }

    #product-main-img .slick-prev, #product-main-img .slick-next {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    #product-main-img:hover .slick-prev, #product-main-img:hover .slick-next {
        -webkit-transform: translateX(0%);
        -ms-transform: translateX(0%);
        transform: translateX(0%);
        opacity: 1;
        visibility: visible;
    }

    #product-main-img .zoomImg {
        background-color: #FFF;
    }

    #product-imgs .product-preview {
        margin: 0px 5px;
        border: 1px solid #E4E7ED;
    }

    #product-imgs .product-preview.slick-current {
        border-color: #D10024;
    }

    #product-imgs .slick-prev {
        top: -20px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    #product-imgs .slick-next {
        top: calc(100% - 20px);
        left: 50%;
        -webkit-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    #product-imgs .slick-prev:before {
        content: "\f106";
    }

    #product-imgs .slick-next:before {
        content: "\f107";
    }

    .product-preview img {
        width: 100%;
    }

    /*----------------------------*\
        Product details
    \*----------------------------*/

    .product-details .product-name {
        text-transform: uppercase;
        font-size: 18px;
    }

    .product-details .product-rating {
        display: inline-block;
        margin-right: 15px;
    }

    .product-details .product-rating>i {
        color: #E4E7ED;
    }

    .product-details .product-rating>i.fa-star {
        color: #D10024;
    }

    .product-details .review-link {
        font-size: 12px;
    }

    .product-details .product-price {
        display: inline-block;
        font-size: 24px;
        margin-top: 10px;
        margin-bottom: 15px;
        color: #D10024;
    }

    .product-details .product-price .product-old-price {
        font-size: 70%;
        font-weight: 400;
        color: #8D99AE;
    }

    .product-details .product-available {
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 700;
        margin-left: 30px;
        color: #D10024;
    }

    .product-details .product-options {
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .product-details .product-options label {
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        margin-right: 15px;
        margin-bottom: 0px;
    }

    .product-details .product-options .input-select {
        width: 90px;
    }

    .product-details .add-to-cart {
        margin-bottom: 30px;
    }

    .product-details .add-to-cart .add-to-cart-btn {
        position: relative;
        border: 2px solid transparent;
        height: 40px;
        padding: 0 30px;
        background-color: #ef233c;
        color: #FFF;
        text-transform: uppercase;
        font-weight: 700;
        border-radius: 40px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .product-details .add-to-cart .add-to-cart-btn>i {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        line-height: 38px;
        color: #D10024;
        opacity: 0;
        visibility: hidden;
    }

    .product-details .add-to-cart .add-to-cart-btn:hover {
        background-color: #FFF;
        color: #D10024;
        border-color: #D10024;
        padding: 0px 30px 0px 50px;
    }

    .product-details .add-to-cart .add-to-cart-btn:hover>i {
        opacity: 1;
        visibility: visible;
    }

    .product-details .add-to-cart .qty-label {
        display: inline-block;
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        margin-right: 15px;
        margin-bottom: 0px;
    }

    .product-details .add-to-cart .qty-label .input-number {
        width: 90px;
        display: inline-block;
    }

    .product-details .product-btns li {
        display: inline-block;
        text-transform: uppercase;
        font-size: 12px;
    }

    .product-details .product-btns li+li {
        margin-left: 15px;
    }

    .product-details .product-links {
        margin-top: 15px;
    }

    .product-details .product-links li {
        display: inline-block;
        text-transform: uppercase;
        font-size: 12px;
    }

    .product-details .product-links li+li {
        margin-left: 10px;
    }

    /*----------------------------*\
         Product tab
    \*----------------------------*/

    #product-tab {
        margin-top: 60px;
    }

    #product-tab .tab-nav {
        position: relative;
        text-align: center;
        padding: 15px 0px;
        margin-bottom: 30px;
    }

    #product-tab .tab-nav:after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        height: 1px;
        background-color: #E4E7ED;
        z-index: -1;
    }

    #product-tab .tab-nav li {
        display: inline-block;
        background: #FFF;
        padding: 0px 15px;
    }

    #product-tab .tab-nav li+li {
        margin-left: 15px;
    }

    #product-tab .tab-nav li a {
        display: block;
        font-weight: 700;
        color: #8D99AE;
    }

    #product-tab .tab-nav li.active a {
        color: #D10024;
    }

    #product-tab .tab-nav li a:after {
        content: "";
        display: block;
        width: 0%;
        height: 2px;
        background-color: #D10024;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    #product-tab .tab-nav li a:hover:after, #product-tab .tab-nav li a:focus:after, #product-tab .tab-nav li.active a:after {
        width: 100%;
    }

    /*-- Rating --*/

    .rating-avg {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .rating-avg .rating-stars {
        margin-left: 10px;
    }

    .rating-avg .rating-stars, .rating .rating-stars {
        display: inline-block;
    }

    .rating-avg .rating-stars>i, .rating .rating-stars>i {
        color: #E4E7ED;
    }

    .rating-avg .rating-stars>i.fa-star, .rating .rating-stars>i.fa-star {
        color: #D10024;
    }

    .rating li {
        margin: 5px 0px;
    }

    .rating .rating-progress {
        position: relative;
        display: inline-block;
        height: 9px;
        background-color: #E4E7ED;
        width: 120px;
        margin: 0px 10px;
        border-radius: 5px;
    }

    .rating .rating-progress>div {
        background-color: #D10024;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        border-radius: 5px;
    }

    .rating .sum {
        display: inline-block;
        font-size: 12px;
        color: #8D99AE;
    }

    /*-- Reviews --*/

    .reviews li {
        position: relative;
        padding-left: 145px;
        margin-bottom: 30px;
    }

    .reviews .review-heading {
        position: absolute;
        width: 130px;
        left: 0;
        top: 0;
        height: 70px;
    }

    .reviews .review-body {
        min-height: 70px;
    }

    .reviews .review-heading .name {
        margin-bottom: 5px;
        margin-top: 0px;
    }

    .reviews .review-heading .date {
        color: #8D99AE;
        font-size: 10px;
        margin: 0;
    }

    .reviews .review-heading .review-rating {
        margin-top: 5px;
    }

    .reviews .review-heading .review-rating>i {
        color: #E4E7ED;
    }

    .reviews .review-heading .review-rating>i.fa-star {
        color: #D10024;
    }

    .reviews-pagination {
        text-align: center;
    }

    .reviews-pagination li {
        display: inline-block;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        background-color: #FFF;
        border: 1px solid #E4E7ED;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .reviews-pagination li:hover {
        background-color: #E4E7ED;
        color: #D10024;
    }

    .reviews-pagination li.active {
        background-color: #D10024;
        border-color: #D10024;
        color: #FFF;
        cursor: default;
    }

    .reviews-pagination li a {
        display: block;
    }

    /*-- Review Form --*/

    .review-form .input {
        margin-bottom: 15px;
    }

    .review-form .input-rating {
        margin-bottom: 15px;
    }

    .review-form .input-rating .stars {
        display: inline-block;
        vertical-align: top;
    }

    .review-form .input-rating .stars input[type="radio"] {
        display: none;
    }

    .review-form .input-rating .stars>label {
        float: right;
        cursor: pointer;
        padding: 0px 3px;
        margin: 0px;
    }

    .review-form .input-rating .stars>label:before {
        content: "\f006";
        font-family: FontAwesome;
        color: #E4E7ED;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .review-form .input-rating .stars>label:hover:before, .review-form .input-rating .stars>label:hover~label:before {
        color: #D10024;
    }

    .review-form .input-rating .stars>input:checked label:before, .review-form .input-rating .stars>input:checked~label:before {
        content: "\f005";
        color: #D10024;
    }


</style>
<?php }
}
