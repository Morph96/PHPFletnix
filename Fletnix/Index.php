<?php
/**
 * Created by PhpStorm.
 * User: paulv & morten-p
 * Date: 1/8/2018
 * Time: 10:53 AM
 */


$_SESSION['ingelogd'] = false;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>FletNix - Paul van Mierle/Morten Pietersma</title>
    <link type="text/css" rel="stylesheet" href="CSS/CSSglobal.css">

</head>
<body>

<?php require_once 'Nav.php'; ?>

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

<?php require 'login_fotos.php';?>

<div class="text-container">
    <div class="text">
        <div><p><a href="../HTML/abonnementen.html">Geen Account? Registreer Hier</a></p></div>
    </div>
</div>

<?php include '../Footer/footer.php';?>

</body>
</html>

