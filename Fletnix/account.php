<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/10/2018
 * Time: 7:21 PM
 */


require 'Nav.php';
require '../Footer/footer.php';

$huidigeDatum = date("D M Y");
$inlogtijd = date("h i A", $_SESSION['inlogtijd'])
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>FletNix - Paul van Mierle/Morten Pietersma</title>
    <link type="text/css" rel="stylesheet" href="CSS/CSSglobal.css">
</head>


<body>
<div class="text-container">
    <div>
        <div class="text">
            <div class="gebruiker">
                <img src="../Fletnix/Images/Homepage/Login/login1.jpg">
                <h1><?= $_SESSION['user'] ?></h1>
            </div>
        </div>
        <div><?php echo "<p>De huidige datum is: {$huidigeDatum}, En je bent ingelogd op: {$inlogtijd}</p>"; ?></div>
    </div>
</div>
</body>

</html>