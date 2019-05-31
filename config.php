<?php

$servername = "localhost";
$username = "socialgreen";
$password = "Qxna53&8";
$dbname = "socialgreen";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


mysqli_set_charset($conn,"utf8");

include 'function.php';

session_start();

?>