<?php
$host = "localhost";
$dbname = "survey_test";
$username = "root";
$password = "IT115@spring";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}      
  
?>