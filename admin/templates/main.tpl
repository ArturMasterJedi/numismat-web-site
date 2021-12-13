<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$title}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/style/bootstrap.css">
    <link rel="stylesheet" href="/assets/style/darkadmin.css">
    <script src="/assets/scripts/bootstrap.bundle.js"></script>
    <link rel="icon" href="/assets/img/icon/iconadmin.png">
</head>
<body>
<header>
    <img class="headerImg" src='/assets/img/icon/iconadmin.png' width="100px">
    <section class="adminText">
        <h1 class="adminNameShop">Numismat.com.ua</h1>
        <h3 class="adminWelcome">Добро пожаловать в админ панель</h3>
    </section>
</header>
<main class="main">
    <section class="menu_admin">
        <div class="vertical-menu">
            <a href="index.php" class="active">Панель администратора</a>
            <a href="indexcategory.php">Категории</a>
            <a href="indexitem.php">Ассортимент товаров</a>
            {if $prava='администратор'}
                <a href="register.php">Зарегестрировать</a>
            {/if}
            <a href="#">Заказы</a>
            <a id="adm">
                Вы вошли как {$prava}
            </a>
            <a href="exit.php" class="exit">Выйти</a>
        </div>
    </section>
    <section class="content">
        <div class="topnav">
            <a class="active" href="../index.php">Главная страница сайта</a>
            <a href="addcategory.php">Добавить категорию</a>
            <a href="additem.php">Добавить товар</a>
            <a href="addatributes.php">Добавить атрибут категории</a>
            <div class="search-container">
                <form action="indexitem.php" method="get">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        {$content}
    </section>
</main>
</body>
</html>