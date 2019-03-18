<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update DB</title>
    <?php include 'Connect.php'; ?>
  </head>
  <body>
    <?php
      $new_Name = $_POST["Name"];
      $new_Price = $_POST["Price"];
      $new_Stock = $_POST["Stock"];

      if (isset($_GET["Name"])) {
        $old_Name = $_GET["Name"];

        $sql = "UPDATE inventory SET Name='$new_Name', Price='$new_Price', Stock='$new_Stock' Where Name='$old_Name'";

      $result = $conn->query($sql);

    } else {

    }
    include 'voorraad.php';
    ?>
  </body>
</html>
