<?php
if (isset($_GET["Name"])) {
  include 'Connect.php';
  $sql = "SELECT * FROM inventory WHERE Name = '" . $_GET["Name"] . "'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result);
  } else {
    echo "Error";
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="Form">
       <form action="Update.php?Name=<?= $row['Name']; ?>" action="Delete.php?Name=<? $row['Name']; ?>" method="post">
         Name: <br>
         <input type="text" name="Name" required value=<?= $row['Name']; ?>> <br>
         Price: <br>
         <input type="text" name="Price" required value=<?= $row['Price']; ?>> <br>
         Stock: <br>
         <input type="text" name="Stock" required value=<?= $row['Stock']; ?>> <br>
         <input type="submit" value="Update">
       </form>
     </div>
   </body>
 </html>
