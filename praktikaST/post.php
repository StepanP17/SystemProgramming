<?php
//Модель
function uploadeImage($Izobr_obloj)
{
    $extencion = pathinfo($Izobr_obloj['name'], PATHINFO_EXTENSION);
    $filename = uniqid() . "." . $extencion;
    move_uploaded_file($Izobr_obloj['tmp_name'], "uploads/".$filename);
    return $filename;
}

function addPostBook($bookname, $Kratkoe_opisanie, $Year_of_book, $fio, $filename)
{
    $pdo = new PDO("mysql:host=localhost;dbname=katalog","root","root");
    $sql = "INSERT INTO books(Bookname, Kratkoe_opisanie, Year_of_book, Izobr_obloj, FIO) VALUE (:Bookname, :Kratkoe_opisanie, :Year_of_book, :Izobr_obloj, :FIO)";
    $statement = $pdo -> prepare($sql);
    $statement -> bindParam("Bookname",$bookname);
    $statement -> bindParam("Kratkoe_opisanie",$Kratkoe_opisanie);
    $statement -> bindParam("Year_of_book", $Year_of_book);
    $statement -> bindParam("Izobr_obloj",$filename);
    $statement ->bindParam("FIO", $fio);
    $statement -> execute();
}

function getPostsBook()
{
$pdo = new PDO("mysql:host=localhost;dbname=katalog","root","root");
$statement = $pdo -> prepare("SELECT * FROM books");
$statement -> execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
return $posts;
}

function addPostAuth($fio)
{
    $pdo = new PDO("mysql:host=localhost;dbname=katalog","root","root");
    $sql = "INSERT INTO authors(FIO) VALUE (:FIO)";
    $statement = $pdo -> prepare($sql);
    $statement -> bindParam("FIO",$fio);
    $statement -> execute();
}