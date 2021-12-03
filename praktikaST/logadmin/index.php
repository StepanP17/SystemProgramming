<?php
session_start();
if ($_SESSION['user']){
    header('Location: profile.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Админ(вход)</title>
    <link rel="stylesheet" href="mycsss.css">
</head>
<body bgcolor="#bc8f8f">

<!-- Форма авторизации-->
<form action="BD_People/sign.php" method="post">
    <label>Логин</label>
    <input type="text" name="login">
    <label>Пароль</label>
    <input type="password" name="password">
    <button style="background-color: #e3d0d0; margin-top: 20px;">Войти</button>

</form>
</body>

</html>

