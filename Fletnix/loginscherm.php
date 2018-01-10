<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login screen</title>
    <link type="text/css" rel="stylesheet" href="../Fletnix/CSS/CSSglobal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include '../Navigation/Nav.php'?>

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

<form method="post" action="login.php">
    <div class="img-container">
        <div class="avatar">
            <img src="Images/Homepage/Login/login3.jpg" alt="Image login">
        </div>
    </div>

    <div class="container">
        <label for="emailaddress"><b>Emailaddres: </b></label>
        <input type="text" name="emailaddress" id="emailaddress" required><br>
        <label for="password"><b>Wachtwoord: </b></label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
</form>

<?php include '../Footer/footer.php'; ?>

</body>
</html>
