<?php
require_once 'post.php';

$filename = uploadeImage($_FILES['Izobr_obloj']);
addPostBook($_POST['Bookname'], $_POST['Kratkoe_opisanie'], $_POST['Year_of_book'], $_POST['FIO'], $filename);
addPostAuth($_POST['FIO']);

header("Location: /praktikaST/Glavnaya.php");
