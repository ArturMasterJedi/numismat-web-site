<?php
require_once 'header.php';
if (!isset($_POST['send'])){
    $smarty_login = new Smarty();
    $content = $smarty_login -> fetch('loginform.tpl');
}elseif (isset($_POST['send'], $_POST['login'], $_POST['pass']) && !empty($_POST['login']) && !empty($_POST['pass'])){
    $query = "SELECT id, prava, phone, email, user_name FROM user WHERE login='{$_POST['login']}' AND pass=SHA1('{$_POST['pass']}')";
    $res = mysqli_query($dbc, $query) or die('Query Error');
    if (mysqli_num_rows($res)==1) {
        $next = mysqli_fetch_array($res);
        /*Создание куки и сессий для защиты админ панели*/
        setcookie('login', $_POST['login'], time() + 60 * 60 * 24 * 30);
        setcookie('user_name', $next['user_name'], time() + 60 * 60 * 24 * 30);
        setcookie('prava', $next['prava'], time() + 60 * 60 * 24 * 30);
        $_SESSION['login'] = $next['login'];
        $_SESSION['user_name'] = $next['user_name'];
        $_SESSION['prava'] = $next['prava'];
        /*-----Вывод статуса прав администратора-----*/
        if ($next['prava'] == 1) {
            $prava = 'администратор';
        } else {
            $prava = 'оператор';
        }

        $content = '<h2 id="h3">С возвращением ' . $next['user_name'] . '</h2><br><h4 id="h3">Вы вошли как ' . $prava . '</h4><br><br><h6 id="h3">Через 3 секунды сайт перейдёт на главную страницу панели администратора</h6>';
        header('refresh:3; url=index.php');
    }else{
        $content = 'Не верный логин или пароль';
        header('location:404.html');
    }
}else{
    $content = '<h3 id="h3">Не достаточно данных для входа</h3>';
}
$smarty_admin -> assign('title', 'Авторизация');
$smarty_admin -> assign('content', $content);
$smarty_admin -> display('login.tpl');
?>
