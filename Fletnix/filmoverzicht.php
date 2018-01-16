<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 12:06 PM
 */

require "Nav.php";
require "PDOverbinding.php";
require '../Footer/footer.php';

if (!isset($_SESSION['user'])) {
    header('Location: loginscherm.php');
} else {
    ?>


    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>FletNix - Paul van Mierle/Morten Pietersma</title>
        <link type="text/css" rel="stylesheet" href="../Fletnix/CSS/CSSglobal.css">
        <style>

        </style>
    </head>
    <body>


    <!--VANAF HIER IMG SRC OPHALEN UIT DATABASE EN VERVOLGENS HIER WEERGEVEN, VARIABELEN IMPLEMENTEREN DUS-->
    <div class="items">
    <?php
    $movie = "";
    $data = $dbh->query("SELECT * FROM Movie WHERE cover_image IS NOT NULL ");
    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $movie .= "<a href='../HTML/filminformatie.php'> <img src= '{$row['cover_image']}'></a>";

    }
    echo $movie; ?>

    </div>


    </body>
    </html>
<?php } ?>