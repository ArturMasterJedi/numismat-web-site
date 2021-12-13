<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $querySelect = "SELECT atributes.id AS id_atr, name_atribut, atributes.short_name, photo_atribut AS photo, category.id AS id_cat, category.name AS cat_name FROM atributes INNER JOIN category ON atributes.id_category=category.id WHERE atributes.id=" . $_GET['id'];
        $resSelect = mysqli_query($dbc, $querySelect) or die('Query Select Error');
        $nextSelect = mysqli_fetch_array($resSelect);

        $querySelectCat = "SELECT id, name FROM category";
        $resSelectCat = mysqli_query($dbc, $querySelectCat) or die('Query Select category Error');
        $category = [];
        while ($nextCat = mysqli_fetch_array($resSelectCat)) {
            $category[] = array('id' => $nextCat['id'], 'name' => $nextCat['name']);
        }

        $smarty_edit = new Smarty();
        $smarty_edit->assign('id', $nextSelect['id_atr']);
        $smarty_edit->assign('id_cat', $nextSelect['id_cat']);
        $smarty_edit->assign('name', $nextSelect['name_atribut']);
        $smarty_edit->assign('category', $category);
        $smarty_edit->assign('short_name', $nextSelect['short_name']);
        $smarty_edit->assign('photo', $nextSelect['photo']);
        $content = $smarty_edit->fetch('editatributes.tpl');
    } elseif (isset($_POST['send'])) {
        if (isset($_POST['name'], $_POST['short_name']) && !empty($_POST['name']) && !empty($_POST['short_name'])) {
            if ($_FILES['new_photo']['error'] == 0) {
                unlink("../assets/img/atribut/{$_POST['oldphoto']}");
                $tmp_photo = $_FILES['new_photo']['tmp_name'];
                $photo_name = time() . $_FILES['new_photo']['name'];
                move_uploaded_file($tmp_photo, "../assets/img/atribut/{$photo_name}");
                $query = "UPDATE atributes SET name_atribut='{$_POST['name']}', photo_atribut='{$photo_name}', id_category='{$_POST['new_cat']}', short_name='{$_POST['short_name']}' WHERE id=" . $_POST['id'];
                mysqli_query($dbc, $query) or die('Query Update Error');
            } else {
                $query = "UPDATE atributes SET name_atribut='{$_POST['name']}', id_category='{$_POST['new_cat']}' WHERE id=" . $_POST['id'];
                mysqli_query($dbc, $query) or die('Query Update Error');
            }

            $content = 'Атрибут отредактирован успешно<br><a href="addatributes.php" class="btn btn-primary">Добавить атрибут категории</a> <a class="btn btn-primary" href="indexcategory.php">К категориям</a> <a href="indexcategory.php" class="btn btn-warning">Назад в категории</a><br>';
        }
    } else {
        $content = 'Редактирование не успешное';
    }

    $smarty_admin->assign('title', 'Редактирование атрибута категории');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>