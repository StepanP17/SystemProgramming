<?php
$login = $_POST['login'];
$password = $_POST['password'];

if ($login === 'root' && $password === 'root'){
    header('Location: ../../del_or_add.php');
}
else {
    echo 'Неверный логин или пароль от Админа. Вы злоумышленник !';
}
