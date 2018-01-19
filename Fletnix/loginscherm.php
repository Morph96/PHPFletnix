<?php

require_once 'Nav.php';

if(!isset($_SESSION['user'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="text-container">
    <div class="text">
        <div class="welkom"><h1>Welkom bij FLETNIX</h1></div>
    </div>
</div>

<div class="text-container">
    <div class="text">
        <div><p>Log nu in om verder te gaan met uw kijk plezier</p></div>
    </div>
</div>
<div class="loginform">
<form method="post" action="login.php">
    <div class="img-container">
        <div class="avatar">
            <img src="Images/Homepage/Login/login1.jpg" alt="Image login">
        </div>
    </div>

    <div class="container">
        <label for="emailaddress"><b>Emailaddres: </b></label>
        <input type="text" name="emailaddress" id="emailaddress" required><br>
        <label for="password"><b>Wachtwoord: </b></label>
        <input type="password" name="password" id="password" required ><br>
        <button type="submit">Login</button>
        <input type="checkbox"> Remember me
    </div>

    <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
</form>
</div>

<div class="text-container">
        <div class="text">
        <div class=""><p><a href="abonnementen.php">Geen Account? Registreer Hier</a></p></div>
    </div>
</div>

<?php require '../Footer/footer.php'; ?>

</body>
</html>

<?php }

else {
    header('location: filmoverzicht.php');
}?>