<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (!isset($_POST['send'])) {
        $queryCategories = "SELECT id, name FROM category";
        $resCategories = mysqli_query($dbc, $queryCategories) or die('Query categories ERROR');
        $categories = [];
        while ($nextCategories = mysqli_fetch_array($resCategories)) {
            $categories[] = array('id' => $nextCategories['id'], 'name' => $nextCategories['name']);
        }
        $smarty_add = new Smarty();
        $smarty_add->assign('categories', $categories);
        $content = $smarty_add->fetch('addatributes.tpl');
    } elseif (isset($_POST['send'], $_POST['name'], $_POST['categories'], $_POST['short_name']) && !empty($_POST['name']) && !empty($_POST['categories']) && !empty($_POST['short_name'])) {
        if ($_FILES['photo']['error'] == 0) {
            $tmp_photo = $_FILES['photo']['tmp_name'];
            $photo_name = time() . $_FILES['photo']['name'];
            move_uploaded_file($tmp_photo, "../assets/img/atribut/$photo_name");
            $query = "INSERT INTO atributes(name_atribut, photo_atribut, id_category, short_name) VALUES ('" . myProtect($_POST['name']) . "','{$photo_name}','{$_POST['categories']}','{$_POST['short_name']}')";
            $res = mysqli_query($dbc, $query) or die('Query Add Error');
            $content = 'Добавление успешно<br><a href="addatributes.php" class="btn btn-primary">Добавить атрибут категории</a> <a class="btn btn-primary" href="indexcategory.php">К категориям</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
        } else {
            $content = 'Не выбрано фото<br><a href="addatributes.php" class="btn btn-primary">Добавить атрибут категории</a> <a class="btn btn-primary" href="indexcategory.php">К категориям</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
        }
    } else {
        $content = 'Добавление не успешно<br><a href="addatributes.php" class="btn btn-primary">Добавить атрибут категории</a> <a class="btn btn-primary" href="indexcategory.php">К категориям</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
    }
    $smarty_admin->assign('title', 'Добавление атрибута категории');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>
