<?php
/**
 * Created by PhpStorm.
 * User: paulv
 * Date: 1/10/2018
 * Time: 7:21 PM
 */

session_start();
session_unset();

header('location: index.php');