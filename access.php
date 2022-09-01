<?php

$server = "localhost";
$username = "cpses_pbabrs8zha";
$password = "phylliszhang";
$database = "phyljqqr_CCit";

$conn = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset('utf8', $conn);
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}