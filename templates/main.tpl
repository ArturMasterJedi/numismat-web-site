<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{$meta_description}">
    <meta name="keywords" content="{$meta_keywords}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$title}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/assets/style/main.css">
    <link rel="stylesheet" href="/assets/style/slick-theme.css">
    <link rel="stylesheet" href="/assets/style/slick.css">
    <link rel="stylesheet" href="/assets/style/nouislider.min.css">
    <link rel="stylesheet" href="/assets/style/lightslider.css">
    <link rel="stylesheet" href="/assets/style/lightslider.css">
    <link rel="icon" href="/assets/img/icon/iconadmin.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<section class="header">
    <img src="/assets/img/logo/photo_2021-09-17_18-42-17.jpg" width="150px">
    <div class="nameShop">
        <h1>NUMISMAT.COM.UA</h1>
        <h2>Коллекционируйте с нами!</h2>
    </div>
</section>

<div class="js-header-wrap ag-header-wrap" style="z-index: 99">
    <header class="ag-header">
        <div class="ag-format-container clearfix">
            <a class="ag-logo_link" href="/">
                <img class="ag-logo_img" src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/menu-and-lamp-light/images/logo.png" alt="SochavaAG – Just Comfortable Coding">
                <div class="ag-logo_tagline">The world trusted <strong class="ag-logo_tagline__strong">Wikyware</strong></div>
                <img class="ag-logo_img-mobile" src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/menu-and-lamp-light/images/logo-mobile.png" alt="SochavaAG – Just Comfortable Coding">
            </a>

            <div class="js-menu_btn-wrap ag-menu_btn-wrap">
                <div class="ag-menu_btn"></div>
            </div>

            <div class="ag-navbar-block">
                <a href="basceditem.php" class="ag-start_btn-reg">Корзина</a>

            </div>
        </div>
    </header>

    <div class="js-menu-block ag-menu-block">
        <div class="ag-format-container">
            <nav class="js-menu_nav ag-menu_nav">

                <div class="ag-mob-login_box">
                    <a href="/login" class="ag-mob-login_link">Log in</a>
                </div>

                <ul class="ag-menu_list">
                    <li class="ag-menu_item">
                        <a href="catalog.php" class="ag-menu_link-item">Каталог</a>
                    </li>
                    <li class="ag-menu_item">
                        <a href="#events" class="ag-menu_link-item">Новости</a>
                    </li>
                    <li class="ag-menu_item">
                        <a href="#analytics" class="ag-menu_link-item">Статьи</a>
                    </li>
                    <li class="ag-menu_item">
                        <a href="#interviews" class="ag-menu_link-item">Интервью</a>
                    </li>
                    <li class="ag-menu_item">
                        <a href="#blogs" class="ag-menu_link-item">Блоги</a>
                    </li>
                    <li class="ag-menu_item">
                        <a href="#ratings" class="ag-menu_link-item">Рейтинги</a>
                    </li>
                </ul>

                <div class="js-search_btn ag-search_btn"></div>
                <div class="js-search-block ag-search-block">
                    <form id="ag-search_form" class="ag-search_form" action="indexitem.php" name="search-form" method="GET" target="_self">
                        <div class="ag-search_field">
                            <div id="ag-search_btn-submit" class="ag-search_btn-submit"></div>

                                <input class="js-search_input ag-search_input" name="search" type="text" title="">
                            </form>

                            <div class="js-search_btn-close ag-search_btn-close"></div>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>

<section class="main">
{$content}
</section>

<section class="footer">
    <div class="antPrice">
        <h3>ОЦЕНКА АНТИКВАРИАТА ПО ФОТО</h3>
        <h6>Качественные фото - гарантия точной оценки</h6>
        <form method="post" action="gradeindex.php" enctype="multipart/form-data">
                <input type="text" class="form-control"><br>
                <input type="text" class="form-control"><br>
                <input type="text" class="form-control"><br>
                <input type="text" class="form-control"><br>
                <input type="submit" class="btn btn-success">
        </form>
    </div>

    <div class="contact">
        <h3>КОНТАКТЫ</h3>
    </div>

    <div class="newItem">
        <h3>НОВЫЕ ПОСТУПЛЕНИЯ</h3>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="/assets/scripts/modernizr.js"></script>
<script src="/assets/scripts/"></script>
<script src="/assets/scripts/main.js" defer></script>
<script src="/assets/scripts/jquery.sticky.js" defer></script>
<script src="/assets/scripts/popper.min.js" defer></script>
<script src="/assets/scripts/jquery.js"></script>
<script src="/assets/scripts/bootstrap.bundle.js"></script>
<script src="/assets/scripts/lightslider.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="/assets/scripts/slick.min.js"></script>
<script src="/assets/scripts/nouislider.min.js"></script>
<script src="/assets/scripts/jquery.zoom.min.js"></script>
</body>
</html>