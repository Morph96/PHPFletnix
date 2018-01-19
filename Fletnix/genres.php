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