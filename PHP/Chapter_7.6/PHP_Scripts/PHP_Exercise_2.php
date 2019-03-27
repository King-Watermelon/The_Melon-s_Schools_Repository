<?php
//Take the input from the form and place it in variables
$InputNumber1 = $_POST["Number_1"];
$InputNumber2 = $_POST["Number_2"];

//Code to see if $_POST has worked and if statement to calculate the calculation
if(isset($_POST["Number_1"], $_POST["Number_2"])) {
  if(isset($_POST["Add"])) {
    $ResultAdd = $InputNumber1 + $InputNumber2;
    echo "The result of adding " . $InputNumber1 . " and " . $InputNumber2 . " is " . $ResultAdd . ".";
  } elseif(isset($_POST["Subtrack"])) {
    $ResultSubtrack = $InputNumber1 - $InputNumber2;
    echo "The result of subtrackting " . $InputNumber1 . " and " . $InputNumber2 . " is " . $ResultSubtrack . ".";
  } elseif(isset($_POST["Multiply"])) {
    $ResultMultiply = $InputNumber1 * $InputNumber2;
    echo "The result of multiplying " . $InputNumber1 . " by " . $InputNumber2 . " is " . $ResultMultiply . ".";
  } elseif (isset($_POST["Divide"])) {
    $ResultDivide = $InputNumber1 / $InputNumber2;
    echo "The result of dividing " . $InputNumber1 . " by " . $InputNumber2 . " is " . $ResultDivide . ".";
  } else {
    echo "Calculator can not compute.";
  }
}
?>
