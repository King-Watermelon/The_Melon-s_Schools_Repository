<?php
  //redirectin to Overview.php
  header("refresh: 2; url=Overview.php");
  echo "The database has been updated";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Updating the List</title>
  </head>
  <body>
    <?php
      //Connecting with the database
      include "Connect.php";

      //Declaring variables
      $new_First_Name = $_POST["VOORNAAM"];
      $new_Last_Name = $_POST["ACHTERNAAM"];

      //Start a Loop to check if 'NR' is set, if it is set a SQL question
      if(isset($_GET["NR"])) {
        $Number = $_GET["NR"];

        //Setting the SQL question
        $query = "UPDATE acteurs SET VOORNAAM = '$new_First_Name', ACHTERNAAM = '$new_Last_Name' WHERE NR = '$Number'";
        $result = mysqli_query($conn, $query);
      } else {
        echo "NR was not set.";
      }
    ?>
  </body>
</html>
