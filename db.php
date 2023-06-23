<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "alibaba_clone";
$con = mysqli_connect($host, $user, $pass, $db);

// Checking if the connection is successful
if (!$con) {
  die("Database Connection Error: " . mysqli_connect_error());
}
