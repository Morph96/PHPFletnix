<?php
/**
 * Created by PhpStorm.
 * User: paulv & morten-p
 * Date: 1/8/2018
 * Time: 10:53 AM
 */
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>FletNix - Paul van Mierle/Morten Pietersma</title>
    <link type="text/css" rel="stylesheet" href="CSS/CSSglobal.css">

</head>
<body>

<?php require_once '../Navigation/Nav.php'; ?>

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

<div class="login-container">
    <div class="login">
        <div><a href="../Fletnix/filmoverzicht.php"><img src="../Fletnix/Images/Homepage/Login/login1.jpg"></a></div>
        <div><a href="../Fletnix/filmoverzicht.php"><img src="../Fletnix/Images/Homepage/Login/login2.jpg"></a></div>
        <div><a href="../Fletnix/filmoverzicht.php"><img src="../Fletnix/Images/Homepage/Login/login3.jpg"></a></div>
        <div><a href="../Fletnix/loginscherm.php"><img src="../Fletnix/Images/Homepage/Login/adduser1.png"></a></div>
    </div>
</div>

<div class="text-container">
    <div class="text">
        <div><p>Geen Account? Registreer <a href="../HTML/abonnementen.html">Hier</a></p></div>
    </div>
</div>

<?php include '../Footer/footer.php';?>

</body>
</html>

