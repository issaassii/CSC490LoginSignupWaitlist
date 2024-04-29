<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('Location: login.php');
        exit();
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="/seproject/fe/css/index.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once('fe/core/nav.php'); ?>
        <div class="bar">SE Bank</div>
        <div class="main">
            <div class="card" style="text-align:left;display:inline-block;margin:3% 1% 0 1%;max-width:30%;padding:15px 15px 0 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nihil voluptate autem fugit recusandae, aliquam quos hic, culpa ducimus, quas minus officia excepturi dolorum error quia! Id, perferendis non? Nihil Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id alias sapiente nihil autem placeat corrupti ut minus saepe dignissimos dicta repellat, sed esse fugit voluptatibus? Fuga dolores vero minus ad. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet at, vitae ullam recusandae provident similique nostrum cupiditate, minima incidunt, eius ratione quisquam? Tempora at laudantium non atque incidunt! Exercitationem, cupiditate.</div>
            <div class="card" style="text-align:left;display:inline-block;margin:3% 1% 0 1%;max-width:30%;padding:15px 15px 0 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nihil voluptate autem fugit recusandae, aliquam quos hic, culpa ducimus, quas minus officia excepturi dolorum error quia! Id, perferendis non? Nihil Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id alias sapiente nihil autem placeat corrupti ut minus saepe dignissimos dicta repellat, sed esse fugit voluptatibus? Fuga dolores vero minus ad. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet at, vitae ullam recusandae provident similique nostrum cupiditate, minima incidunt, eius ratione quisquam? Tempora at laudantium non atque incidunt! Exercitationem, cupiditate.</div>
            <div class="card" style="text-align:left;display:inline-block;margin:3% 1% 0 1%;max-width:30%;padding:15px 15px 0 15px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nihil voluptate autem fugit recusandae, aliquam quos hic, culpa ducimus, quas minus officia excepturi dolorum error quia! Id, perferendis non? Nihil Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id alias sapiente nihil autem placeat corrupti ut minus saepe dignissimos dicta repellat, sed esse fugit voluptatibus? Fuga dolores vero minus ad. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet at, vitae ullam recusandae provident similique nostrum cupiditate, minima incidunt, eius ratione quisquam? Tempora at laudantium non atque incidunt! Exercitationem, cupiditate.</div>
        </div>
    </body>
</html>