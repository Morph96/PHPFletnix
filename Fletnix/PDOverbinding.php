<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 1:52 PM
 */

$hostname = "localhost";
$dbname = "Fletnix_Docent";
$username = "sa";
$pw = "M0rt3n1996!";

try {
    $dbh = new PDO("sqlsrv:Server=$hostname; Database=$dbname; ConnectionPooling=0",
        "$username", "$pw");

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Er ging iets mis met de database. <br>";
    echo "De melding is {$e->getMessage()} <br><br>";
}