<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 12:06 PM
 */

include "../Navigation/Nav.php";
include "PDOverbinding.php";


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

<div class="header-container">
    <div class="header">
        <div class="genre"></div>
<!--VANAF HIER IMG SRC OPHALEN UIT DATABASE EN VERVOLGENS HIER WEERGEVEN, VARIABELEN IMPLEMENTEREN DUS-->
        <div class="items" id="Sci-fi">
            <h2> Sci-Fi</h2>
            <a href="filminformatie.php"><img src=./Images/doctorstrange.jpg alt='file'></a>
            <img src=./Images/cloudatlas.jpeg alt='file'>
            <img src=./Images/matrix.jpeg alt='file'>
            <img src=./Images/7357.jpg alt='file'>
        </div>

        <div class="items" id="Actie">
            <h2> Aktie</h2>
            <img src=./Images/apocalypse.jpg alt='file'>
            <img src=./Images/batman.jpeg alt='file'>
            <img src=./Images/ganstersquad.jpg alt='file'>
        </div>

        <div class="items" id="Horror">
            <h2> Horror </h2>
            <img src=./Images/dontbreathe.jpeg alt='file'>
            <img src=./Images/honeymoon.jpeg alt='file'>
        </div>

        <div class="items" id="Drama">
            <h2> Drama </h2>
            <img src=./Images/godfather.jpg alt='file'>
        </div>


    </div>
</div>

<?php include '../Footer/footer.php';?>

</body>
</html>