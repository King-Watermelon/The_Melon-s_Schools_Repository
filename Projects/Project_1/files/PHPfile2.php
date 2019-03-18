<?php

//variable
$wanneer = (isset($_POST["Wanneer"])  ? $_POST["Wanneer"] : null);
$wat = (isset($_POST["WatTeDoen"])  ? $_POST["WatTeDoen"] : null);
$waar = (isset($_POST["Waar"])  ? $_POST["Waar"] : null);

//code
$myfile = fopen("test.csv", "a");
  fwrite($myfile, $wanneer);
  fwrite($myfile, $wat);
  fwrite($myfile, $waar);

fclose($myfile);
?>
