<?php

$server = "localhost";
$username = "pbhabths_user";
$password = "IGclLqKtodF]";
$database = "pbhabths_database";

$conn = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset('utf8', $conn);
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}