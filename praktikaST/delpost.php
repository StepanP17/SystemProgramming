<?php

if (!empty($_POST['ID_A'])) {
    $ID_A = $_POST['ID_A'];
}
else {
    $ID_A = null;
    echo 'Введите id автора<br>';
}

if (!empty($_POST['ID_B'])) {
    $ID_B = $_POST['ID_B'];
}
else {
    $ID_B = null;
    echo 'Введите id книги<br>';
}


try {
    $connection = new PDO('mysql:host=localhost;dbname=katalog;charset=utf8', 'root', 'root');
} catch (PDOException $e){
    echo 'Подключение не удалось:' . $e->getMessage();
    exit();
}

if ($ID_B !=null) {
    $delete_B = $connection->query("DELETE FROM `books` WHERE `ID_B` = '$ID_B'");
    $delete_A = $connection->query("DELETE FROM `authors` WHERE `ID_A` = '$ID_A'");
}

require_once('delbooks.php');
if ($ID_A != null && $ID_B != null){
    echo '<script>
    alert("Удаление книги успешно выполнено")
        </script>';
}