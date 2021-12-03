<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body bgcolor="#bc8f8f">

</body>
</html>


<?php
$servername = "localhost"; // Адрес сервера
$username = "root"; // Имя пользователя
$password = "root"; // Пароль
$BDname = "katalog"; // Название БД

// Подключение к БД
$mysqli = new mysqli($servername, $username, $password, $BDname);

// Проверка на ошибку
if ($mysqli->connect_error) {
printf("Соединение не удалось: %s\n", $mysqli->connect_error);
exit();
}
// Получаем запрос
$inputSearch = $_REQUEST['search'];

// Создаём SQL запрос
$sql = "SELECT * FROM `books` WHERE `Bookname` = '$inputSearch' || `Year_of_book` = '$inputSearch' || `FIO` = '$inputSearch' || `Izobr_obloj` = '$inputSearch' || `Kratkoe_opisanie` = '$inputSearch'";

// Отправляем SQL запрос
$result = $mysqli -> query($sql);

function doesItExist(array $arr) {
    // Создаём новый массив
    $data = array(
        'Bookname' => $arr['Bookname'] != false ? $arr['Bookname'] : 'Нет данных',
        'Year_of_book' => $arr['Year_of_book'] != false ? $arr['Year_of_book'] : 'Нет данных',
        'FIO' => $arr['FIO'] != false ? $arr['FIO'] : 'Нет данных',
        'Izobr_obloj' => $arr['Izobr_obloj'] != false ? $arr['Izobr_obloj'] : 'Нет данных',
        'Kratkoe_opisanie' => $arr['Kratkoe_opisanie'] != false ? $arr['Kratkoe_opisanie'] : 'Нет данных'
    );
    return $data; // Возвращаем этот массив
}

function countPeople($result) {
    // Проверка на то, что строк больше нуля
    if ($result -> num_rows > 0) {
        // Цикл для вывода данных
        while ($row = $result -> fetch_assoc()) {
            // Получаем массив с строками которые нужно выводить
            $arr = doesItExist($row);
            // Вывод данных
            echo "Название книги: ". $row['Bookname'] ."<br>
                  Год выпуска книги: ". $row['Year_of_book'] ."<br>
                  ФИО Автора: ". $arr['FIO'] . "<br>"
                  . $arr['Izobr_obloj'] . "<br>
                  Краткое описание: ". $arr['Kratkoe_opisanie'] . "<hr>";
        }
        // Если данных нет
    } else {
        echo "Никто не найден";
    }
}
countPeople($result); // Функция вывода пользователей
