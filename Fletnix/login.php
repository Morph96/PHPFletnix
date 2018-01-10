<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 5:53 PM
 */

session_start();

require 'PDOverbinding.php';

$data = $dbh->query("SELECT customer_mail_address, password FROM customer");

$emails = [];
$passwords = [];
$passCorrect = false;
$mailCorrect = false;


while ($row = $data->fetch(PDO::FETCH_BOTH)) {
    $emails[] = $row['customer_mail_address'];
    $passwords[] = $row['password'];
}

$mailAddres = $_POST['emailaddress'];
$password = $_POST['password'];

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