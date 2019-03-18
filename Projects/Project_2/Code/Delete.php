<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete from DB</title>
    <?php include 'Connect.php'; ?>
  </head>
  <body>
    <?php

      if (isset($_GET["Name"])) {
        $old_Name = $_GET["Name"];

        $sql = "DELETE FROM inventory WHERE Name ='$old_Name'";

      $result = $conn->query($sql);

    } else {

    }
    include 'voorraad.php';
    ?>
  </body>
</html>
