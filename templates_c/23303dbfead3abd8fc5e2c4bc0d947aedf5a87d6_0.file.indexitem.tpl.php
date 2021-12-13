<?php
/* Smarty version 3.1.39, created on 2021-11-11 16:35:45
  from 'C:\OpenServer\domains\numismat\templates\indexitem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618d1c31e51a05_90127420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23303dbfead3abd8fc5e2c4bc0d947aedf5a87d6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\templates\\indexitem.tpl',
      1 => 1636637739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618d1c31e51a05_90127420 (Smarty_Internal_Template $_smarty_tpl) {
?><main class="cd-main-content">
    <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
            <ul class="cd-filters">
                <li class="placeholder">
                    <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                </li>
                <li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
                <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
                <li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li>
            </ul> <!-- cd-filters -->
        </div> <!-- cd-tab-filter -->
    </div> <!-- cd-tab-filter-wrapper -->
    <div class="cd-filter">
        <form>
            <div class="cd-filter-block">
                <h4>Search</h4>

                <div class="cd-filter-content">
                    <input type="search" placeholder="Try color-1...">
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Check boxes</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                        <label class="checkbox-label" for="checkbox1">Option 1</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                        <label class="checkbox-label" for="checkbox2">Option 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                        <label class="checkbox-label" for="checkbox3">Option 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Select</h4>

                <div class="cd-filter-content">
                    <div class="cd-select cd-filters">
                        <select class="filter" name="selectThis" id="selectThis">
                            <option value="">Choose an option</option>
                            <option value=".option1">Option 1</option>
                            <option value=".option2">Option 2</option>
                            <option value=".option3">Option 3</option>
                            <option value=".option4">Option 4</option>
                        </select>
                    </div> <!-- cd-select -->
                </div> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->

            <div class="cd-filter-block">
                <h4>Radio buttons</h4>

                <ul class="cd-filter-content cd-filters list">
                    <li>
                        <input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
                        <label class="radio-label" for="radio1">All</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
                        <label class="radio-label" for="radio2">Choice 2</label>
                    </li>

                    <li>
                        <input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
                        <label class="radio-label" for="radio3">Choice 3</label>
                    </li>
                </ul> <!-- cd-filter-content -->
            </div> <!-- cd-filter-block -->
        </form>

        <a href="#0" class="cd-close">X</a>
    </div> <!-- cd-filter -->

    <a href="#0" class="cd-filter-trigger">Фильтры</a>
    <section class="outItem">
        <section class="sideMenu" style="background: #dbdbdb; height: 100%">
            <ul id="accordion" class="accordion">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                    <li>
                        <div class="link"><img width="32px" src="/assets/img/category/<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['atribute']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value['id'] == $_smarty_tpl->tpl_vars['atribute']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_cat']) {?>
                                    <li><a href="indexitem.php?id_atribute=<?php echo $_smarty_tpl->tpl_vars['atribute']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['atribute']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
                                <?php }?>
                            <?php
}
}
?>
                        </ul>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-12">
                        <h2>Отзывы о нас</h2>
                        <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['comment']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <div class="comment mt-4 text-justify">
                            <h5 style="color: black"><?php echo $_smarty_tpl->tpl_vars['comment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</h5>
                            <span><?php echo $_smarty_tpl->tpl_vars['comment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['date'];?>
</span><br>
                            <p><?php echo $_smarty_tpl->tpl_vars['comment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['text'];?>
</p>
                        </div>
                        <?php
}
}
?>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form class="formComment" method="post" action="loading.php" id="algin-form">
                            <div class="form-group">
                                <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="text_comment" id="" msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                            </div>
                            <div class="form-group"> <label for="name">Name</label> <input type="text" name="name_comment" id="fullname" class="form-control"> </div>
                            <div class="form-group"> <label for="email">Email</label> <input type="text" name="email_comment" id="email" class="form-control"> </div>
                            <div class="form-group">
                                <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                            </div>
                            <div class="form-inline"> <input type="checkbox" name="check" id="checkbx" class="mr-1"> <label for="subscribe">Subscribe me to the newlettter</label> </div>
                            <div class="form-group"> <input type="submit" id="post" name="postComment" class="btn btn-warning" value="Оставить коментарии"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="indexitem">

                <section id="cardItem" class="container-fluid bg-trasparent my-4 p-3" ">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 g-2">
                        <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['item']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <div class="col">
                                <div class="card h-100 shadow-sm"><br>
                                    <div id="divImg"><img id="box-img" class="box-img" src="/assets/img/item/<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" class="card-img-top" alt="..."></div>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['saleperc'] != null) {?>
                                        <div class="label-top shadow-sm">- <?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['saleperc'];?>
 %</div>
                                    <?php }?>
                                    <div class="card-body">
                                        <hr>
                                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success"><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
₴</span> <span class="float-end">
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['oldprice'] != null) {?>
                                                    <span id="oldprice" class="small text-muted"><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['oldprice'];?>
 ₴</span>
                                                <?php }?>
                                        </a></span> </div>
                                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</h5>
                                        <div class="text-center my-4" id="button_view"> <a href="viewed.php?id_item=<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" class="btn btn-warning">Смотреть</a> </div>
                                        <div class="clearfix mb-1"> <a href="#" class="float-start"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                                </svg></a> <a href="basced.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mode=add" class="float-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                                </svg></a> </div>
                                    </div>
                                </div>
                            </div>
                        <?php
}
}
?>
                    </div>
                </section>

                <nav class="pag">
                    <ul class="pagination">
                        <?php if ($_smarty_tpl->tpl_vars['aktivpage']->value == 1) {?>
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item">
                                <a href="indexitem.php?page=<?php echo ($_smarty_tpl->tpl_vars['aktivpage']->value-1);?>
" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                        <?php }?>
                        <?php
$__section_i_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pag']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_3_total = $__section_i_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_3_total !== 0) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= $__section_i_3_total; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['pag']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'] == $_smarty_tpl->tpl_vars['aktivpage']->value) {?>
                                <li class="page-item"><a style="color: #f7810a" class="page-link"><?php echo $_smarty_tpl->tpl_vars['pag']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
</a></li>
                            <?php } else { ?>
                                <li class="page-item"><a href="indexitem.php?page=<?php echo $_smarty_tpl->tpl_vars['pag']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
" class="page-link"><?php echo $_smarty_tpl->tpl_vars['pag']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['pag'];?>
</a></li>
                            <?php }?>
                        <?php
}
}
?>
                        <?php if ($_smarty_tpl->tpl_vars['aktivpage']->value == $_smarty_tpl->tpl_vars['count']->value) {?>
                            <li class="page-item">
                                <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <a href="indexitem.php?page=<?php echo ($_smarty_tpl->tpl_vars['aktivpage']->value+1);?>
" class="page-link" aria-label="Previous">
                                <span aria-hidden="true">»</span>
                            </a>
                        <?php }?>
                    </ul>
                </nav>

    </section>

</main> <!-- cd-main-content -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr>
                <h2>СПЕЦПРЕДЛОЖЕНИЕ ДЛЯ ВАС!</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
$__section_k_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_4_total = $__section_k_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_4_total !== 0) {
for ($__section_k_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_4_iteration <= $__section_k_4_total; $__section_k_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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

        <div class="container" style="margin-top: -60px">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr>
                    <h2>Распродажа монет со скидкой до 95%</h2>
                </div>
                <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div class="MultiCarousel-inner">
                        <?php
$__section_k_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selectItemSale']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_5_total = $__section_k_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_5_total !== 0) {
for ($__section_k_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_5_iteration <= $__section_k_5_total; $__section_k_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'] > 0) {?>
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
                                    <a class="btn btn-warning" href="viewed.php?id_item=<?php echo $_smarty_tpl->tpl_vars['selectItemSale']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Смотреть</a>
                                </div>
                            </div>
                            <?php }?>
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
$__section_k_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['view']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_6_total = $__section_k_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_6_total !== 0) {
for ($__section_k_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_6_iteration <= $__section_k_6_total; $__section_k_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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
</section><?php }
}
