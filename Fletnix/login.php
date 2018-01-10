<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 5:53 PM
 */

include 'PDOverbinding.php';

$data = $dbh->query("SELECT customer_mail_address, password FROM customer");

$emails = array();
$passwords = array();


//echo "<pre>";
//print_r($data->fetchAll(PDO::FETCH_ASSOC));

while ($row = $data->fetch(PDO::FETCH_BOTH)) {
    $emails[] .= "{$row['customer_mail_address']} &nbsp ";
    $passwords[] .= "{$row['password']}<br>";
}


$mailAddres = $_POST['mailaddres'];
$password = $_POST['password'];

foreach($emails as $email) {
if ($mailAddres[$i] == $emails) {
    echo "Deze gebruiker staat wel in ons systeem";
    header('location:http://localhost/PHPFletnix/Fletnix/filmoverzicht.php');
    $ingelogd = true;

} else {
    echo "Het Email of wachtwoord klopt niet of staat niet in ons systeem";
    header('location:http://localhost/PHPFletnix/Fletnix/loginscherm.php');
    $ingelogd = false;
};
}

print_r($emails);
