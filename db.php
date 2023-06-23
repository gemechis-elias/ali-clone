<?php

$host = "localhost";
$user = "myuser";
$pass = "dechasa1234";
$db = "alibaba_clone";
$con = mysqli_connect($host,$user,$pass,$db);

// Checking If the connection is obtained
if (!$con) {
  die("Database Connection Error");
}
