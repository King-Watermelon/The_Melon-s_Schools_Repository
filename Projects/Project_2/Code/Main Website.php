<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vuurwerkshop</title>
    <link rel = "stylesheet" href = "main.css">
    <?php include 'Connect.php'; ?>
  </head>

  <body>
    <div class="menu">
      <a href="contactpagina.html">Contact</a>
      <a href="klantenservice.html">Klantenservice</a>
      <a href="voorraad.php">Voorraad</a>
      <div class="dropdown">
        <button class="dropbtn">Ons Assortiment
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <?php
          $sql = "SELECT DISTINCT Categorie FROM inventory";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                  echo '<a href="Show_Fireworks.php?cat=' . $row["Categorie"] . '">' . $row["Categorie"] . '</a>';
              }
          } else {
              echo "0 results";
          } ?>
        </div>
      </div>
    </div>
    <?php include "Show_Fireworks.php";?>
  </body>

</html>
