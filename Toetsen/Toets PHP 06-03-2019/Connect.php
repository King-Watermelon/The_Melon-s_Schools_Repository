<?php
//Creating variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "films";

//Connecting to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Checking if the connection is created
if (!$conn) {
    die("Connection failed: " . mysqli_error());
}
?>
