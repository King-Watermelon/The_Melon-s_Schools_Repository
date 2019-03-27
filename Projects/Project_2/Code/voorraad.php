<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Voorraad</title>
  </head>
  <body>
    <?php
    //Link the Connection page
    include 'Connect.php';

    //Set the querry in the $sql
    $sql = "SELECT Name, Price, Stock FROM inventory ORDER BY Categorie";


    foreach ($conn->query($sql) as $row) {
      print $row["Name"] . "\t";
    }

    ?>

    <div class="stuff">
          	<table border="1">
              <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Total price</th>
                <th>Total cost of stock</th>
                <th>Change</th>
                <th>Delete</th>
              </tr>
<?php
$total = 0;
$sum = 0;
  /*if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $total = $row["Price"] * $row["Stock"];
      $sum += $total;*/
      ?>
                 <!--<tr>
                    <td><?php //echo $row["Name"];  ?></td>
                    <td><?php //echo $row["Stock"]; ?></td>
                    <td><?php //echo $row["Price"]; ?></td>
                    <td><?php //echo $row["Price"] * $row["Stock"]; ?></td>
                    <td><?php //echo $sum; ?></td>
                    <td><?php //echo '<a href=Wijzig.php?Name=' . $row['Name'] . '>Wijzig</a>' ?></td>
                    <td><?php //echo '<a href=Delete.php?Name=' . $row['Name'] . '>Delete</a>' ?></td> <br>
                  </tr>
                </table>
              </div> -->
<?php
/*
      } else {
          echo "0 results";
      }*/
      $conn = null;
?>
  </body>
</html>
