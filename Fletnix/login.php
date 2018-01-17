<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/8/2018
 * Time: 5:53 PM
 */

session_start();

require 'PDOverbinding.php';
require 'functions.php';


$emails = [];
$passwords = [];
$passCorrect = false;
$mailCorrect = false;
$mailAddres = $_POST['emailaddress'];
$password = $_POST['password'];


login();