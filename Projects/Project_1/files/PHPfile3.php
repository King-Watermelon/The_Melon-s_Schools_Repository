<?php

$file = fopen("test.csv", "r");
"<html>";
  echo "<link rel = stylesheet href = stylesheet.css>";
    echo "<table>";
      echo "<tr>";
        echo "<th> datum </th>";
        echo "<th> wat </th>";
        echo "<th> waar </th>";
      echo "</tr>";

while (!feof($file) ) {
$rij = fgetcsv($file, 1028);

      echo "<tr>";
        echo "<td> $rij[0] </td>";
        echo "<td> $rij[1] </td>";
        echo "<td> $rij[2] </td>";
      echo "</tr>";
}
  echo "</table>";
  fclose($file);
"</html>";
?>
