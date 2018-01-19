<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 12:06 PM
 */
require "Nav.php";
require "PDOverbinding.php";

if (!isset($_SESSION['user'])) {
    header('Location: loginscherm.php');
} else {
    ?>


    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>FletNix - Paul van Mierle/Morten Pietersma</title>
        <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
    </head>

    <body>
    <div class="items">
        <?=
            movies() ;
        ?>

    </div>
    <?php require '../Footer/footer.php'; ?>
    </body>
    </html>
<?php } ?>