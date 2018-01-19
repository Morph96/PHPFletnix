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
</head>
<body>
<?php require 'Nav.php' ;
        require 'PDOverbinding.php';
?>


<?php

$movieID = $_GET['movie_id'];
global $dbh;
$beschrijving= "";
$duratie = "";
$prijs = "";
$reg_vnaam = "";
$reg_anaam = "";
$uitgave_jaar = "";
$trailer = "";
$afbeelding = "";
$titel = "";

$data = $dbh->query("SELECT title, duration, description, publication_year, price, cover_image, URL FROM Movie 
                WHERE movie_id = $movieID");
while($row = $data->fetch()){
    $beschrijving .= $row['description'];
    $trailer .= $row['URL'];
    $afbeelding .= $row['cover_image'];
    $titel .= $row['title'];
    $uitgave_jaar .= $row['publication_year'];
    $duratie .= $row['duration'];
    $prijs .= $row['price'];

}

$data = $dbh ->query("SELECT p.firstname, p.lastname FROM Movie M
                INNER JOIN Movie_Director MD ON M.movie_id = MD.movie_id
                INNER JOIN Person P ON MD.person_id = P.person_id
                WHERE M.movie_id = $movieID");

while($row = $data->fetch()){
    $reg_vnaam .= $row['firstname'];
    $reg_anaam .= $row['lastname'];
}
?>


<div class="movie_trailer">
    <div class="trailer">
            <div class="imageDescription">
                <img src="<?php echo $afbeelding ?>">
                    <div class="Cast">
                        <h2><?php echo $titel; ?></h2>
                        <p><?php echo $beschrijving; ?></p>
                        <p> Regisseur: <?php echo $reg_vnaam; echo " "; echo $reg_anaam; ?> <br>
                            Lengte: <?php echo $duratie; ?> minuten <br>
                            Year of publication: <?php echo $uitgave_jaar; ?> <br>
                            Prijs: <?php echo $prijs; ?>
                        </p>
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
    echo "<table>";
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