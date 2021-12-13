<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $queryEdit = "SELECT name, description, short_name, photo_category FROM category WHERE id=" . $_GET['id'];
        $resEdit = mysqli_query($dbc, $queryEdit) or die('Query Edit Error');
        $nextEdit = mysqli_fetch_array($resEdit);
        /*-----Создание об'єкта Smarty-----*/
        $smarty_edit = new Smarty();
        $smarty_edit->assign('id', $_GET['id']);
        $smarty_edit->assign('name', $nextEdit['name']);
        $smarty_edit->assign('description', $nextEdit['description']);
        $smarty_edit->assign('short_name', $nextEdit['short_name']);
        $smarty_edit->assign('photo', $nextEdit['photo_category']);
        $content = $smarty_edit->fetch('editcategory.tpl');
    } else {
        if (isset($_POST['send'])) {
            $query = "UPDATE category SET name='{$_POST['name']}', description='{$_POST['description']}', short_name='{$_POST['short_name']}' WHERE id=" . $_POST['id'];
            mysqli_query($dbc, $query) or die('Query 1 Update Error');
            $content = '<h3>Редактирование успешно</h3><br><a href="indexcategory.php">Назад</a>';
        } elseif (isset($_POST['sendnew'], $_POST['id']) && !empty($_POST['id'])) {
            if ($_FILES['new_photo']['error'] == 0) {
                unlink("../assets/img/category/{$_POST['oldphoto']}");
                $tmp_new_photo = $_FILES['new_photo']['tmp_name'];
                $new_photo = time() . $_FILES['new_photo']['name'];
                move_uploaded_file($tmp_new_photo, "../assets/img/category/{$new_photo}");
                $queryNewPhoto = "UPDATE category SET photo_category='{$new_photo}' WHERE id=" . $_POST['id'];
                mysqli_query($dbc, $queryNewPhoto) or die('Query Photo Error');
                $content = '<h3>Фото изменено успешно</h3><br><a href="indexcategory.php">Назад</a>';
            }
        }
    }
    $smarty_admin->assign('title', 'Редактирование категории');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>
