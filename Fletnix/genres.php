<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/18/2018
 * Time: 8:28 PM
 */

require 'Nav.php';
require '../Footer/footer.php';


$zoekGenres = $_GET['genres'];
function zoekenOpGenre()
{

    global $dbh, $zoekGenres;
    $data = $dbh->query("SELECT M.title, M.cover_image, M.movie_id FROM Movie_genre MG JOIN Movie M ON MG.movie_id = M.movie_id WHERE MG.genre_name LIKE '%{$zoekGenres}%' AND M.cover_image IS NOT NULL");

    $results = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $results .= "<a class='spacing' href='../Fletnix/filminformatie.php?movie_id={$row['movie_id']}''><img src= '{$row['cover_image']}' name='{$row['movie_id']} '>
                     <p>{$row['title']}</p></a>";
    }

    return $results;

}

?>


<html>
<head>
    <link type="text/css" rel="stylesheet" href="CSS/Global_styleSheet.css">
</head>
<body>

<h1 class="center">Dit zijn uw resultaten op de Genre <?= $zoekGenres ?></h1>

<div class="items">
    <?=
    zoekenOpGenre() ;
    ?>

</body>
</html>