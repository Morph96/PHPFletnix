<?php
/**
 * Created by PhpStorm
 * User: Morten
 * Date: 1/9/2018
 * Time: 01:12 AM
 */

    $film_beschrijving[] = "";
    $film_cover .= "";

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
<?php include '../Navigation/Nav.php'?>

<div class="movie-trailer">
    <div class = "cover">
        <img src = "./Images/doctorstrange.jpg">
        <div class = "info">
            <h1> Doctor Strange </h1>
            <p> Marvel's "Doctor Strange" follows the story of the talented neurosurgeon Doctor Stephen Strange who, after a tragic car accident, <br>
                must put ego aside and learn the secrets of a hidden world of mysticism and alternate dimensions. Based in New York City's Greenwich Village,<br>
                Doctor Strange must act as an intermediary between the real world and what lies beyond, utilising a vast array of metaphysical abilities<br>
                and artifacts to protect the Marvel Cinematic Universe.</p>

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