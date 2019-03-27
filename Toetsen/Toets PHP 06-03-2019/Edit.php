<?php
  //Create the connection with the database
  include "Connect.php";

  //Create a loop to check if the 'NR' posted, and to set the SQL question
  if(isset($_GET["NR"])) {
    $stmt = $pdo->query("SELECT * FROM acteurs WHERE NR = '" . $_GET["NR"] . "'");
    $row = $stmt->fetch();
  } else {
    echo "The necessary input was not provided.";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit the list</title>
  </head>
  <body>
    <!--Creating the form to edit the Names on the list -->
    <div class="Form">
      <form action="Update.php?NR=<?= $row['NR']; ?>" action="Delete.php?NR=<? $row['NR']; ?>" method="post">
        First Name: <br>
        <input type="text" name="VOORNAAM" required value=<?= $row['VOORNAAM']; ?>> <br>
        Last Name: <br>
        <input type="text" name="ACHTERNAAM" required value=<?= $row['ACHTERNAAM']; ?>> <br>
        <input type="submit" value="Update">
      </form>
    </div>
  </body>
</html>
