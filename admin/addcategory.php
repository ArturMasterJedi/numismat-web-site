<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (!isset($_POST['send'])) {
        $smarty_add_category = new Smarty();
        $content = $smarty_add_category->fetch('addcategory.tpl');
    } elseif (isset($_POST['send'], $_POST['name'], $_POST['description'], $_POST['short_name']) && !empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['short_name'])) {
        if ($_FILES['photo']['error'] == 0) {
            $tmp_name = $_FILES['photo']['tmp_name'];
            $photo_name = time() . $_FILES['photo']['name'];
            move_uploaded_file($tmp_name, "../assets/img/category/$photo_name");

            $query = "INSERT INTO category(name, description, short_name, photo_category) VALUES ('{$_POST['name']}', '{$_POST['description']}', '{$_POST['short_name']}','{$photo_name}')";
            $res = mysqli_query($dbc, $query) or die('Query Error');
        }
        $content = 'Добавление успешно<br><a href="addcategory.php" class="btn btn-primary">Добавить категорию</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
    } else {
        $content = 'Добавление не успешно<br><a href="addcategory.php" class="btn btn-primary">Добавить категорию</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
    }

    $smarty_admin->assign('content', $content);
    $smarty_admin->assign('title', 'Добавление категории');
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>