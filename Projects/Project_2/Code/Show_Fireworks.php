    <?php
    include 'Connect.php';
    //form categorie

    if (isset($_GET['cat'])) {
      $sql = "SELECT Name, Price, Image, Categorie FROM inventory WHERE Categorie = '".$_GET['cat']."'";
      } else{
      $sql = "SELECT Name, Price, Image, Categorie FROM inventory";
    }

    echo $sql;

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
