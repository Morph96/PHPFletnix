<?php
/**
 * Created by PhpStorm
 * User: Morten
 * Date: 1/9/2018
 * Time: 01:12 AM
 */
session_start();
if(!isset($_SESSION['user'])) {
    session_destroy();
}

    require 'PDOverbinding.php'

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>FletNix - Paul van Mierle/Morten Pietersma</title>
    <link type="text/css" rel="stylesheet" href="../Fletnix/CSS/CSSglobal.css">
    <style>

    </style>
</head>
<body>
<?php require 'Nav.php' ?>

<div class="movie-trailer">
    <div class = "cover">
        <img src = "./Images/doctorstrange.jpg">
        <div class = "info">
                <?php
                    $data = $dbh -> query("SELECT description FROM Movie WHERE movie_id = 313479 ");
                    while($row = $data->fetch()){
                        echo "$row[0]";
                    }
                ?>




        </div>
    </div>
    <div class="trailer">
        <video controls preload>
            <source src = "../Fletnix/Trailers/DOCTOR_STRANGE_Official_Trailer_(Marvel_-_2016_).mp4">
        </video>
    </div>
</div>


<div class="copyright"><p>Copyright by Paul/Morten Productions</p></div>

</body>
</html>