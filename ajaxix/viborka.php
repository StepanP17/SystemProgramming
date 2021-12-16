<?php
$connection = new PDO('mysql:host=localhost;dbname=ajaxdb','root','');
$statement1 = $connection->prepare('SELECT * FROM posts');
$result1 = $statement1->execute();
$posts = $statement1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($posts);