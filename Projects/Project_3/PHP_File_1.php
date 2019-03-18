<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vuurwerkshop</title>
    <link rel = "stylesheet" href = "stylesheet.css">
  </head>
  <body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerkshop";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Price, Image, Stock FROM inventory";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table>";
    while($row = $result->fetch_assoc()) {
      ?>
      <div class="stuff">
          <form class="idk" >
            <?php
            echo
              $row["Name"]."<br>".
              $row["Image"]."<br>" .
              "In voorraad:".$row["Stock"]."<br>".
              $row["Price"];
              ?>
          </form>
      </div>
    <?php }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
</body>
</html>
