<?php

$server = "localhost";
$username = "phyljqqr_phylz";
$password = "phylliszhang";
$database = "phyljqqr_CCit";

$conn = mysqli_connect($server, $username, $password, $database);
mysqli_set_charset('utf8', $conn);
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}