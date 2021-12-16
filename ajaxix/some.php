<?php
$date = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

$connect = new PDO('mysql:host=localhost;dbname=ajaxdb','root','');
$sql ='INSERT INTO posts(title, content) VALUES (:title, :content)';
$statement = $connect -> prepare($sql);
$result = $statement -> execute($date);