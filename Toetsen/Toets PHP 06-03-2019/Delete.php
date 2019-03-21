<?php
//redirectin to Overview.php
header("refresh: 2; url=Overview.php");
echo "Record has been deleted.";

//Connection with database
include 'Connect.php';

//Create a loop to check if the 'NR' posted, and to set the SQL question
if(isset($_GET["NR"])) {
  $query = "DELETE FROM acteurs WHERE NR = '" . $_GET["NR"] . "'";
  $result = mysqli_query($conn, $query);
} else {
  echo "The necessary input was not provided.";
}
?>
