<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/16/2018
 * Time: 6:43 PM
 */

function alleLanden()
{
    global $dbh;

    $data = $dbh->query("SELECT * FROM country");

    $landen = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $landen .= "<option value='{$row['country_name']}'>{$row['country_name']}</option>";
    }
    return $landen;
}

function alleContracten()
{
    global $dbh;

    $data = $dbh->query("SELECT * FROM Contract");

    $contract = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $contract .= "<option value='{$row['contract_type']}'>{$row['contract_type']}</option>";
    }

    return $contract;
}

function alleBetalingsMethoden()
{
    global $dbh;

    $data = $dbh->query("SELECT * FROM Payment");

    $betaalMehtodes = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $betaalMehtodes .= "<option value='{$row['payment_method']}'>{$row['payment_method']}</option>";
    }
    return $betaalMehtodes;
}

function movies()
{
    global $dbh;

    $movie = "";

    $data = $dbh->query("SELECT * FROM Movie WHERE cover_image IS NOT NULL ");

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $movie .= "<a href='../HTML/filminformatie.php'><img src= '{$row['cover_image']}'></a>";
    }
    return $movie;
}

function login()
{
    global $dbh, $emails, $passwords, $passCorrect, $mailCorrect, $mailAddres, $password;

    $data = $dbh->query("SELECT customer_mail_address, password FROM customer");

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $emails[] = $row['customer_mail_address'];
        $passwords[] = $row['password'];
    }

    $lengthArray = count($emails);

    for ($i = 0; $i < $lengthArray; $i++) {
        if ($mailAddres == $emails[$i] && $password == $passwords[$i]) {
            $passCorrect = true;
            $mailCorrect = true;
        }
    }

    if ($passCorrect == true && $mailCorrect == true) {
        $_SESSION['user'] = $mailAddres;
        $_SESSION['wachtwoord'] = $password;
        $_SESSION['ingelogd'] = true;
        $_SESSION['inlogtijd'] = time();
        header("location:http://localhost/PHPFletnix/Fletnix/index.php");
    } else {
        session_unset();
        session_destroy();
        header("location:http://localhost/PHPFletnix/Fletnix/loginscherm.php");
    }
}

function alleGenres()
{
    global $dbh;

    $data = $dbh->query("SELECT DISTINCT genre_name FROM Movie_Genre");

    $genres = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $genres .= "<li><a href='../Fletnix/filmoverzicht.php'>{$row['genre_name']}</a></li>";
    }

    return $genres;
}

function searchResult()
{
    global $dbh, $search;
    $data = $dbh->query("SELECT * FROM Movie WHERE title LIKE '%{$search}%' AND cover_image IS NOT  NULL ");

    $results = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $results .= "<a class='spacing' style='width: 15%' href='../HTML/filminformatie.php'><img src= '{$row['cover_image']}'>
                     <p>{$row['title']}</p></a>";
    }

    return $results;

}