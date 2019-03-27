<?php
//Declaring variables for connection\
$HostIP = "localhost";
$Database = "palindromen";
$User =  "root";
$Password = "";
$charset = "utf8mb4"

//Connecting
$Conn = "mysql:host=$HostIP;dbname=$Database;charset=$charset";
$Options = [
  PDO:: ATTR_ERRMODE          	  =>  PDO::ERRMODE_EXCEPTION,
  PDO:: ATTR_DEFAULT_FETCH_MODE   =>  PDO::FETCH_ASSOC,
  PDO:: ATTR_EMULATE_PREPARES     =>  false,
];

//Try to catch a exception
try {
  $Pdo = new PDO($Conn, $User, $Password, $Option);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), )
}
?>
