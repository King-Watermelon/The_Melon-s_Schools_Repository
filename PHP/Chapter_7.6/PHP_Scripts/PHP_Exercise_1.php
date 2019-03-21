<?php
//Declaring variables
$PriceBeforeTaxes = $_POST["PriceBeforeTaxes"];

//Code to see if post has worked
if(isset($_POST["PriceBeforeTaxes"])) {
  if (isset($_POST["LowTaxes"])) {
    $Price = $PriceBeforeTaxes * 1.06;
    echo "The price with low taxes is " . $Price . ".";
  } elseif (isset($_POST["HighTaxes"])) {
    $Price = $PriceBeforeTaxes * 1.21;
    echo "The price with high taxes is " . $Price . ".";
  } else {
    echo "Please select the amount of taxes.";
  }
} else {
  echo "No values given.";
}
?>
