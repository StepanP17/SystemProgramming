
<?php
    require_once 'post.php';
    $posts = getPostsBook();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="dekor.css">
</head>
<body bgcolor="#bc8f8f">
<img src="../для%20практики%20jpg/kniaga.png" height="50px" style="margin-left: 800px; margin-bottom: -70px">

<p class="Vxod" type="submit"><a href="logadmin/" class="vxod">Вход (Для Админа)</a></p>
<div class="dab">



    <html>
    <body>
    <form name="search" method="post" action="search.php">
        <input type="search" style="margin-left: 20px;" name="search"/></br>
        </br>
        <input type="submit" style="margin-left: 20px;" value="Поиск"/></br>
        <style>
            .vl {
                border-right: 2px solid #3e3e3e;
                height: 1040px;
                margin-top: -80px;
                margin-left: 220px;
            }
        </style>

        <div class="vl"></div>

    </form>



    <div class="knigi">
        <?php foreach ($posts as $post):?>
            <div class="avi">
                <h3><?= $post['Bookname']?></h3>
                <h4><?= $post['Year_of_book']?></h4>
                <h4><?= $post['FIO']?></h4>
                <img src="uploads/<?= $post['Izobr_obloj'];?>" width="250" height="390">
                <p><?= $post['Kratkoe_opisanie']?></p>

            </div>
        <?php endforeach;?>
    </div>

</body>
</html>

