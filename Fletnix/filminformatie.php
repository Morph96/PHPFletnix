<?php
/**
 * Created by PhpStorm
 * User: Morten
 * Date: 1/9/2018
 * Time: 01:12 AM
 */

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>FletNix - Paul van Mierle/Morten Pietersma</title>
    <link type="text/css" rel="stylesheet" href="../Fletnix/CSS/Global_styleSheet.css">
    <style>

    </style>
</head>
<body>
<?php require 'Nav.php' ;
        require 'PDOverbinding.php';
?>


<?php

$movieID = $_GET['movie_id'];
global $dbh;
$description = "";
$trailer = "";
$image = "";
$title = "";

$data = $dbh->query("SELECT title, description, cover_image, URL FROM Movie WHERE movie_id = $movieID");
while($row = $data->fetch()){
    $description .= $row['description'];
    $trailer .= $row['URL'];
    $image .= $row['cover_image'];
    $title .= $row['title'];
}

//$data = $dbh-> query("SELECT P.firstname, P.lastname, MC.role FROM Movie_Cast MC
//                      INNER JOIN Movie M ON MC.movie_id = M.movie_id
//                      INNER JOIN Person P ON MC.person_id = P.person_id
//                      WHERE M.movie_id = $movieID");
//echo "<table border = '10'>";
//echo "<tr><td> Firstname </td><td> Lastname </td><td> Role </td></tr>";
//
//while($row = $data->fetch(PDO::FETCH_BOTH))
//{
//    echo "<tr><td>{$row['firstname']}</td><td>{$row['lastname']} </td><td></td></tr>";
//}
//echo "</table>";



?>


<div class="movie_trailer">
    <div class="trailer">
            <div class="imageDescription">
                <img src="<?php echo $image ?>">
                    <div class="Cast">
                        <h2><?php echo $title ?></h2>
                        <p><?php echo $description ?></p>
                    </div>
            </div>
        <iframe width="560" height="315" src="<?php echo $trailer ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
</div>

<div class="Actors">
    <?php $data = $dbh-> query("SELECT P.firstname, P.lastname, MC.role FROM Movie_Cast MC 
                      INNER JOIN Movie M ON MC.movie_id = M.movie_id
                      INNER JOIN Person P ON MC.person_id = P.person_id
                      WHERE M.movie_id = $movieID");
    echo "<table border = '10'>";
    echo "<tr><td> Firstname </td><td> Lastname </td><td> Role </td></tr>";

    while($row = $data->fetch(PDO::FETCH_BOTH))
    {
        echo "<tr><td>{$row['firstname']}</td><td>{$row['lastname']} </td><td>{$row['role']}</td></tr>";
    }
    echo "</table>"; ?>


</div>


<?php require '../Footer/footer.php'; ?>

</body>
</html>