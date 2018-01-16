<?php

/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 10:09 AM
 */

session_start();
require 'PDOverbinding.php';
function alleGenres()
{
    $hostname = "localhost";
    $dbname = "Fletnix_Docent";
    $username = "sa";
    $pw = "M0rt3n1996!";

    try {
        $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0",
            "$username", "$pw");

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Er ging iets mis met de database. <br>";
        echo "De melding is {$e->getMessage()} <br><br>";
    }

    $data = $dbh->query("SELECT DISTINCT genre_name FROM Movie_Genre");

    $genres = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $genres .= "<li><a href='../HTML/filmoverzicht.php'>{$row[0]}</a></li>";
    }

    return $genres;
}

?>

<head>
    <link type="text/css" rel="stylesheet" href="CSS/Nav.css">
</head>


<div class="menu-containter">
    <div class="menu">
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">&#9776;
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <?php if (!isset($_SESSION['user'])) {
                        echo "<a href='loginscherm.php'>Log in</a>";
                    } else {
                        echo "<a href='account.php'>{$_SESSION['user']}</a>";
                        echo "<a href='logUit.php'>uitloggen</a>";
                    } ?>
                    <hr>
                    <a href="../Fletnix/Index.php">Homepage</a>
                    <a href="../Fletnix/filmoverzicht.php">Filmoverzicht</a>
                    <a href="../Fletnix/about.php">Over ons</a>
                    <a href="../Fletnix/abonnementen.php">Abonnementen</a>
                    <hr/>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <ul>Genres
                        <li><a href=../Fletnix/filmoverzicht.php><?= alleGenres() ?></a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="user-container">
            <div class="logo">FletNix</div>
        </div>
    </div>
</div>
