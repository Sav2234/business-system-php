<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "business-system-php";
// $port = "3307";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}