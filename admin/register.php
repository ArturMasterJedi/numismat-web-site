<?php
require_once 'header.php';
if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (!isset($_POST['send'])) {
        $smarty_registration = new Smarty();
        $content = $smarty_registration->fetch('register.tpl');
    } elseif (isset($_POST['send'], $_POST['login'], $_POST['pass'], $_POST['phone'], $_POST['email'], $_POST['user_name']) && !empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['phone']) && !empty($_POST['user_name']) && !empty($_POST['email']) && $_POST['pass'] == $_POST['repass']) {
        $query = "INSERT INTO user(login, pass, prava, phone, email, user_name) VALUES ('{$_POST['login']}', SHA1('{$_POST['pass']}'), '{$_POST['cid']}', '{$_POST['phone']}', '{$_POST['email']}','{$_POST['user_name']}')";
        //echo $query;
        mysqli_query($dbc, $query) or die('Query Error');
        $content = '<h3>Регистрация успешна</h3><br><h4>Через 3 секунды вас перекинет на главную страницу администратора</h4>';
        header('refresh: 3; location:index.php');
    } else {
        $content = '<h3>Регистрация успешна</h3><br><h4>Через 3 секунды вас перекинет на главную страницу администратора</h4>';
        header('refresh: 3; location:index.php');
    }
    $smarty_admin->assign('title', 'Регистрацыя администратора');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>