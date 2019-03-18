<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Voorraad</title>
    <link rel = "stylesheet" href = "Voorraad_Layout.css">
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

    $sql = "SELECT Name, Price, Stock, Total_Price FROM inventory";
    $result = $conn->query($sql);
    ?>

    <div class="stuff">
          	<table width="400">
              <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Total price</th>
                <th>Total cost of stock</th>
              </tr>
<?php
$total = 0;
$sum = 0;
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      ?>
      <?php  $total = $row["Price"] * $row["Stock"];
      $sum += $total?>
                 <tr>
                    <td><?php echo $row["Name"];  ?></td>
                    <td><?php echo $row["Stock"]; ?></td>
                    <td><?php echo $row["Price"]; ?></td>
                    <td><?php echo $row["Price"] * $row["Stock"]; ?></td>
                    <td><?php echo $sum; ?></td>  <br>
                  </tr>
                </table>
              </div>
<?php
}
      } else {
          echo "0 results";
      }
      $conn->close();
?>
  </body>
</html>
