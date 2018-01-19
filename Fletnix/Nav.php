<?php

/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 10:09 AM
 */

session_start();
require 'PDOverbinding.php';
require 'functions.php';

if (isset($_SESSION['user'])) {
    $huidigeDatum = date("D M Y");
    $inlogtijd = date("h i A", $_SESSION['inlogtijd']);
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
                </button>
                <div class="dropdown-content">
                    <?php if (!isset($_SESSION['user'])) {
                        echo "<a href='loginscherm.php'>Log in</a>";
                    } else {
                        echo "<h3>{$_SESSION['user']}</h3>";
                        echo "<a href='logUit.php'>uitloggen</a>";
                    } ?>
                    <hr>
                    <a href="../Fletnix/Index.php">Homepage</a>
                    <a href="../Fletnix/filmoverzicht.php">Filmoverzicht</a>
                    <a href="../Fletnix/about.php">Over ons</a>
                    <a href="../Fletnix/abonnementen.php">Abonnementen</a>
                    <hr/>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <div class="search-container">
                            <form method="get" action="search.php">
                                <div class="inline">
                                    <label for="zoekTitle">Zoeken op Titel:</label>
                                    <input type="text" placeholder="Titel..." name="search">
                                </div>
                                <button type="submit">Zoek op Titel</button>
                            </form>
                        </div>
                        <hr>
                        <div class="genreSelectie">
                            <form method="get" action="genres.php">
                                <div class="inline">
                                    <label for="genres">Genres:</label>
                                    <select name="genres" id="genres"><br>
                                        <?= alleGenres() ?>
                                    </select>
                                </div>
                                <button type="submit">Zoek op Genre</button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="logo">FletNix</div>
        <?php if (isset($_SESSION['user'])) { ?>
            <div class="account">
                <?php echo "<p>Huidige datum: {$huidigeDatum} <br>Inigelogd: {$inlogtijd}</p>"; ?>
            </div>
        <?php } ?>
    </div>
</div>
