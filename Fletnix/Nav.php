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
                        <div class="search-container">
                            <form method="get" action="search.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                        <ul>Genres
                            <li><?= alleGenres() ?></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div>
            <div class="logo">FletNix</div>
        </div>
    </div>
</div>
