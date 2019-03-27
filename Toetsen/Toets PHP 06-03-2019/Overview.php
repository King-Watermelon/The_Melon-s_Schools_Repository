<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List of actors & actresses</title>
    <link rel="stylesheet" href="Main.css">
  </head>
  <body>
    <?php
      //Make the connection with the database
      include 'Connect.php';
    ?>

    <!--Creating the table -->
    <table>
      <tr>
        <th>Nr</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <?php
        //Set the query and start a while loop to print it all in the table
        $stmt = $pdo->query("SELECT NR, VOORNAAM, ACHTERNAAM FROM acteurs ORDER BY NR");
        while ($row = $stmt->fetch()) {
          echo "<tr>";
          echo "<td>" . $row["NR"] . "</td>";
          echo "<td>" . $row["VOORNAAM"] . "</td>";
          echo "<td>" . $row["ACHTERNAAM"] . "</td>";
          echo "<td> <a href=Edit.php?NR=" . $row["NR"] . ">Edit</a> </td>";
          echo "<td> <a href=Delete.php?NR=" . $row["NR"] . ">Delete</a> </td>";
          echo "</tr>";
        }

        //Close the connection with the database
        $conn = null;
      ?>
    </table>
  </body>
</html>
