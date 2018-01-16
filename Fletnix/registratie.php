<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/11/2018
 * Time: 10:56 AM
 */

session_start();

require 'PDOverbinding.php';

$naam = $_GET['naam'];
$achternaam = $_GET['achternaam'];
$land = $_GET['land'];
$geboortejaar = $_GET['geboortejaar'];
$rekeningnummer = $_GET['rekeningnummer'];
$emailaddress = $_GET['emailaddress'];
$username = $_GET['username'];
$wachtwoord = $_GET['wachtwoord'];
$wachtwoord2 = $_GET['wachtwoord2'];
$fletnixType = $_GET['fletnixtype'];
$betalingsMethode = $_GET['betalingsmethode'];
$startdate = date("Y-m-d");
$geslacht = $_GET['geslacht'];


if($wachtwoord != $wachtwoord2) {
    header("location:abonnementen.php");
} else {
    $registratieInsert =  "INSERT INTO Customer VALUES 
(:customer_mail_address, :lastname, :firstname, :payment_method, :payment_card_number, :contract_type, :subscription_start, :subscription_end, :user_name, :password, :country_name, :gender, :birth_date)";
    $query = $dbh->prepare($registratieInsert);


    $query->execute(
        array(':customer_mail_address' => $emailaddress, ':lastname' => $achternaam, ':firstname' => $naam, ':payment_method' => $betalingsMethode, ':payment_card_number' => $rekeningnummer,
            ':contract_type' => $fletnixType, ':subscription_start' => $startdate, ':subscription_end' => null, ':user_name' => $username, ':password' => $wachtwoord, ':country_name' => $land,
            ':gender' => $geslacht, ':birth_date' => $geboortejaar));

    header("location: loginscherm.php");
}