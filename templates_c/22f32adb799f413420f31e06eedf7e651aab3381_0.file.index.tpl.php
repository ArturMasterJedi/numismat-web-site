<?php
/* Smarty version 3.1.39, created on 2021-11-30 13:05:52
  from 'C:\OpenServer\domains\numismat\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a5f78042c742_59665779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22f32adb799f413420f31e06eedf7e651aab3381' => 
    array (
      0 => 'C:\\OpenServer\\domains\\numismat\\templates\\index.tpl',
      1 => 1638266726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a5f78042c742_59665779 (Smarty_Internal_Template $_smarty_tpl) {
?><main style="margin-bottom: 5%">
    <section class="slides">

        <section class="slides-nav">
            <nav class="slides-nav__nav">
                <button class="slides-nav__prev js-prev">Prev</button>
                <button class="slides-nav__next js-next">Next</button>
            </nav>
        </section>

        <section class="slide is-active">
            <div class="slide__content">
                <figure class="slide__figure"><div class="slide__img" style="background-image: url('/assets/img/slides/slide.jpg')"></div></figure>
                <header class="slide__header">
                    <h2 class="slide__title">
                        <span class="title-line"><span>Click, Key</span></span>
                        <span class="title-line"><span>Or Scroll Fool</span></span>
                    </h2>
                </header>
            </div>
        </section>

        <section class="slide">
            <div class="slide__content">
                <figure class="slide__figure"><div class="slide__img" style="background-image: url(https://source.unsplash.com/okmtVMuBzkQ/2000x1100)"></div></figure>
                <header class="slide__header">
                    <h2 class="slide__title">
                        <span class="title-line"><span>Slide Two</span></span>
                        <span class="title-line"><span>Dood Mood</span></span>
                    </h2>
                </header>
            </div>
        </section>

        <section class="slide">
            <div class="slide__content">
                <figure class="slide__figure"><div class="slide__img" style="background-image: url(https://source.unsplash.com/WuQME0I_oZA/2000x1100)"></div></figure>
                <header class="slide__header">
                    <h2 class="slide__title">
                        <span class="title-line"><span>This Right</span></span>
                        <span class="title-line"><span>Here Makes Three</span></span>
                    </h2>
                </header>
            </div>
        </section>

        <section class="slide">
            <div class="slide__content">
                <figure class="slide__figure"><div class="slide__img" style="background-image: url(https://source.unsplash.com/NsWcRlBT_74/2000x1100)"></div></figure>
                <header class="slide__header">
                    <h2 class="slide__title">
                        <span class="title-line"><span>How Now</span></span>
                        <span class="title-line"><span>Part Four More</span></span>
                    </h2>
                </header>
            </div>
        </section>
    </section>
</main>

<div class="row"><h2>Категории товаров</h2></div>

<!-- SECTION -->
<div class="bbb_advs">
    <div class="container">
        <div class="row">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="col-lg-4 bbb_adv_col" style="padding: 10px">
                <!-- bbb_adv Item -->
                <div class="bbb_adv align-items-center" style="background: #FFFFFF">
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></div>
                        <div class="bbb_adv_image"><img src="/assets/img/category/<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" alt=""></div>
                    </div>
                </div>
            </div>
            <?php
}
}
?>
        </div>
    </div>
</div>
<!-- /SECTION -->


    <style>
        .bbb_advs {
            width: 100%;
            padding-top: 80px;
            padding-bottom: 80px
        }

        .bbb_adv {
            width: 100%;
            height: 220px;
            border: solid 1px #e8e8e8;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1)
        }

        .bbb_adv_content {
            padding-left: 30px
        }

        .bbb_adv_subtitle {
            font-size: 12px;
            color: rgba(0, 0, 0, 0.5);
            margin-bottom: 26px
        }

        .bbb_adv_title a {
            font-size: 18px;
            font-weight: 500;
            color: #000000
        }

        .bbb_adv_title a:hover {
            color: #0e8ce4
        }

        .bbb_adv_title_2 a {
            font-size: 18px;
            font-weight: 500;
            color: #0e8ce4
        }

        .bbb_adv_title_2 a:hover {
            opacity: 0.8
        }

        .bbb_adv_text {
            color: #828282;
            margin-top: 10px;
            font-size: 14px
        }

        .bbb_adv_image {
            width: 168px;
            height: 100%
        }

        .bbb_adv_image img {
            display: block;
            max-width: 100%
        }



        .slides-nav {
            z-index: 99;
            position: fixed;
            right: -5%;
            display: flex;
            align-items: center;
            height: 100%;
            color: #111;
        }
        @media (min-width: 54em) {
            .slides-nav {
                right: 2%;
            }
        }
        .slides-nav__nav {
            position: relative;
            right: 0;
            display: block;
            font-size: 1em;
            transform: rotate(90deg);
            transform-origin: center;
        }
        .slides-nav button {
            position: relative;
            display: inline-block;
            padding: 0.35em;
            margin: 0;
            font-family: "Space Mono", monospace;
            appearance: none;
            background: transparent;
            border: 0;
            overflow-x: hidden;
            transition: color 0.5s ease;
        }
        .slides-nav button:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            height: 1px;
            width: 0;
            background: #111;
            transition: width 0.4s ease;
        }
        .slides-nav button:hover {
            cursor: pointer;
            color: rgba(17, 17, 17, 0.75);
            transition: color 0.5s ease;
        }
        .slides-nav button:hover:after {
            width: 100%;
            transition: width 0.4s ease;
        }
        .slides-nav button:focus {
            outline: 0;
        }
        .is-sliding .slides-nav {
            pointer-events: none;
        }
        .slides {
            position: relative;
            display: block;
            height: 100vh;
            width: 100%;
            background: #fff;
            transition: background 1s cubic-bezier(0.99, 1, 0.92, 1);
        }
        .is-sliding .slides {
            background: #ededed;
            transition: background 0.3s cubic-bezier(0.99, 1, 0.92, 1);
        }
        .slide {
            z-index: -1;
            padding: 0;
            position: absolute;
            width: 100%;
            height: 100vh;
            transition: z-index 1s ease;
        }
        .slide.is-active {
            z-index: 19;
            transition: z-index 1s ease;
        }
        .slide__content {
            position: relative;
            margin: 0 auto;
            height: 95%;
            width: 95%;
            top: 2.5%;
        }
        @media (min-width: 54em) {
            .slide__content {
                height: 80%;
                width: 80%;
                top: 10%;
            }
        }
        .slide__header {
            z-index: 9;
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            overflow-y: hidden;
            transform: translateX(5%);
        }
        @media (min-width: 54em) {
            .slide__header {
                transform: translateX(-5%);
            }
        }
        .slide__title {
            font-family: Montserrat, helvetica;
            font-size: 2.5em;
            font-weight: 700;
            color: #111;
            overflow-y: hidden;
        }
        @media (min-width: 54em) {
            .slide__title {
                font-size: 5em;
            }
        }
        .slide__title .title-line {
            display: block;
            overflow-y: hidden;
        }
        .slide__title .title-line span {
            display: inline-block;
            transform: translate3d(0, 140%, 0);
            opacity: 0;
            transition: transform 0.4s ease, opacity 0.8s ease;
        }
        .slide__title .title-line span:nth-child(1) {
            transition-delay: 0.15s;
        }
        .slide__title .title-line span:nth-child(2) {
            transition-delay: 0.3s;
        }
        .is-active .slide__title .title-line span {
            transform: translate3d(0, 0%, 0);
            opacity: 1;
            transition: transform 0.6s cubic-bezier(0.77, 0, 0.175, 1), opacity 0.1s ease;
        }
        .is-active .slide__title .title-line:nth-of-type(2n) span {
            transition-delay: 0.2s;
        }
        .slide__figure {
            z-index: 7;
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            height: 100%;
            width: 100%;
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        .is-sliding .slide__figure {
            transform: scale(0.8);
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        .slide__img {
            position: relative;
            display: block;
            background-size: cover;
            background-attachment: fixed;
            background-position: 50%;
            -webkit-backface-visibility: hidden;
            height: 0%;
            width: 100%;
            filter: grayscale(0%);
            transition: height 1s 1.4s cubic-bezier(0.19, 1, 0.22, 1), filter 0.4s 0.1s ease;
        }
        .is-active .slide__img {
            height: 100%;
            opacity: 1;
            transition: height 0.5s 0.3s cubic-bezier(0.77, 0, 0.175, 1), filter 0.4s 0.1s ease;
        }
        .is-sliding .slide__img {
            filter: grayscale(100%);
        }

    </style>
    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <hr/>
                <h2>Распродажа монет со скидкой до 95%</h2>
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
                <hr/>
                <h2>Недавно просмотренные товары</h2>
            </div>
            <div class="MultiCarousel" data-items="1,2,3,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['view']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
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
                                <p style="font-size: 18px; color: #ff0000">-<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['sale'];?>
% off</p>
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
<section class="infoIndex">
    <div>
        Антикварный интернет-магазин. Покупаем за 90 % от рыночной цены! Антикварный магазин Numismat осуществляет покупку и продажу старинных предметов в режиме онлайн. Наша специализация:
        <ul style="list-style: circle">
            <li>драгоценности и украшения;</li><br>
            <li>исторические экспонаты;</li><br>
            <li>произведения искусства;</li><br>
            <li>монеты и банкноты; </li><br>
            <li>награды и другие редкие старинные вещи.</li><br>
        </ul>
    </div>
</section><?php }
}
