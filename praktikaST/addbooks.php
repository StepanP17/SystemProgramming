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
<form action="store.php" method="post" enctype="multipart/form-data">
    <input required type="text" name="Bookname" placeholder="Название книги" style="margin-bottom: 10px; width: 167px;"><br>
    <input required type="text" name="FIO" placeholder="ФИО автора" style="margin-bottom: 10px; width: 167px;"><br>
    <textarea required name="Kratkoe_opisanie" placeholder="Краткое описание" style="width: 400px; height: 300px"></textarea><br><br>
    <input required type="text" name="Year_of_book" placeholder="Год выпуска"><br><br>
    <input required type="file" name="Izobr_obloj"><br><br>
    <button type="submit" style="background-color: #e3d0d0;;"><a href="Glavnaya.php"></a>Добавить</button>
</form>
</body>
</html>

