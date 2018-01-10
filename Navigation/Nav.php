<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 10:09 AM
 */

include '../Fletnix/PDOverbinding.php';

$ingelogd = null;

$data = $dbh->query("SELECT DISTINCT genre_name FROM Movie_Genre");
//
//echo "<pre>";
//print_r($data->fetchAll(PDO::FETCH_BOTH));

$genres = "";

while ($row = $data->fetch(PDO::FETCH_BOTH)) {
    $genres .= "<li><a href='../HTML/filmoverzicht.php'>{$row[0]}</a></li>";
}


?>

<!--<head>-->
<!--    <link type="text/css" rel="stylesheet" href="Nav.css">-->
<!--</head>-->


<div class="menu-containter">
    <div class="menu">
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">&#9776;
                    <i class="fa fa-caret-down"></i>
                </button>
                <!-- TOEGEVOEGD '..' OM NAAR ROOT TE GAAN-->
                <div class="dropdown-content">
                    <a href="../Fletnix/Index.php">Homepage</a>
                    <a href="../Fletnix/filmoverzicht.php">Filmoverzicht</a>
                    <a href="../HTML/about.html">Over ons</a>
                    <a href="../HTML/abonnementen.html">Abonnementen</a>
                    <hr/>
                    <ul>Genres
                        <li><a href=../Fletnix/filmoverzicht.php></a><?= $genres ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="user-container">
            <div class="logo">FletNix</div>
            <?php IF($ingelogd) { ?>
            <div class="gebruiker-img">
            <img src="../Fletnix/Images/Homepage/Login/login1.jpg" alt="image">
            <div class="gebruiker">USER</div>
            <?php }; ?>
            </div>
        </div>
    </div>
</div>
