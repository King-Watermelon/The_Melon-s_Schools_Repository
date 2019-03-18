<?php
//Calling a function
function revertWord($text) {
  $revertText = "";
  //We use a forloop because we know the range
  for ($index = strlen($text) -1; $index > -1; $index --) {
    $revertText = $revertText . $text[$index];
  }
  return $revertText;
}
?>
