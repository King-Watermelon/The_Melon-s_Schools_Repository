<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="menu">
      <a href="contactpagina.html">Contact</a>
      <a href="klantenservice.html">Klantenservice</a>
      <div class="dropdown">
        <button class="dropbtn">Ons Assortiment
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="PHP_File_2.php">Vuurpijlen</a>
          <a href="Php_File_3.php">Knalvuurwerk</a>
          <a href="Php_File_4.php">Kindervuurwerk</a>
          <a href="Main_Website.php" >Onze Home Pagina</a>
        </div>
      </div>
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerkshop";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Price, Image, Categorie FROM inventory WHERE Categorie = 'Vuurpijl'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["Price"]. $row["Image"].">"."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
  </body>
</html>
