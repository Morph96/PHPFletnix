<?php
/**
 * Created by PhpStorm.
 * User: paulv & morten-p
 * Date: 1/8/2018
 * Time: 10:53 AM
 */


require 'Nav.php';

if (!isset($_SESSION['user'])) {
    header('Location: loginscherm.php');
} else {
    ?>

    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">

        <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
    </head>
    <body>
    <div class="text-container">
        <div class="text">
            <div class="welkom"><h1>Welkom bij FLETNIX</h1></div>
        </div>
    </div>
    <div class="text-container">
        <div class="text">
            <div><p>Kies een Gebruiker of maak een account aan</p></div>
        </div>
    </div>

    <?php require 'login_fotos.php'; ?>
    <div class="fixed">
        <?php require '../Footer/footer.php'; ?>
    </div>

    </body>
    </html>

<?php } ?>