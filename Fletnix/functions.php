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

    $data = $dbh->query("SELECT cover_image, movie_id FROM Movie WHERE cover_image IS NOT NULL ");


    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $movie .= "<a href='../Fletnix/filminformatie.php?movie_id={$row['movie_id']}'><img src= '{$row['cover_image']}' name='{$row['movie_id']}'></a>";
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
        $genres .= "<option value='{$row['genre_name']}'>{$row['genre_name']}</option>";
    }
    return $genres;

}

function searchResult()
{
    global $dbh, $search;
    $data = $dbh->query("SELECT * FROM Movie WHERE title LIKE '%{$search}%' AND cover_image IS NOT  NULL ");

    $results = "";

    while ($row = $data->fetch(PDO::FETCH_BOTH)) {
        $results .= "<a class='spacing' style='width: 15%' href='../Fletnix/filminformatie.php?movie_id={$row['movie_id']}''><img src= '{$row['cover_image']}' name='{$row['movie_id']} '>
                     <p>{$row['title']}</p></a>";
    }

    return $results;

}

function showResult()
{

    $result = $_GET['genre_name'];
    $overzicht = "";
    global $dbh;
    $data = $dbh ->query("SELECT movie_id FROM Movie_Genre WHERE genre_name = $result");
    while ($row = $data->fetch(PDO::FETCH_BOTH)){

        $overzicht .= "{$row['movie_id']}";
     }
    return $overzicht;

}

?>