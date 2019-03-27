<?php
//declaring the variables needed for the connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerkshop";

//Code
try {
  //Create the connection
  $conn = new PDO("mysql:host = $servername; dbname = $dbname", $username, $password);
  //Set PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e)  {
    echo "Connection failed: " . $e->getMessage();
}
?>
