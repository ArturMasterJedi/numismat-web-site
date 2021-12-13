<br>
<form method="post" action="register.php">
    <h2>Регистрация пользователя админ-панели</h2>
    <label>Введите имя пользователя</label><br>
    <input type="text" name="user_name"><br>
    <label>Введите логин</label><br>
    <input type="text" name="login"><br>
    <label>Введите пароль</label><br>
    <input type="password" name="pass"><br>
    <label>Подтвердите пароль</label><br>
    <input type="password" name="repass"><br>
    <label>Введите номер мобильного телефна</label><br>
    <input type="text" name="phone"><br>
    <label>Введите E-MAIL</label><br>
    <input type="email" name="email"><br><br>
    <label>Выберите права для пользователя</label><br>
    <input type="radio" value="0" name="cid" checked> <label> Оператор </label>
    <input type="radio" value="1" name="cid"> <label> Администратор </label><br>
    <input class="btn btn-success" type="submit" name="send" value="Зарегестрировать"><br>
</form>