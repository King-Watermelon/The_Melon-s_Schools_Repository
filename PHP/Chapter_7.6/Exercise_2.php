<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Basic Calculator</title>
    <?php include "PHP_Scripts/PHP_Exercise_2.php"; ?>
  </head>
  <body>
    <form action="PHP_Scripts/PHP_Exercise_2.php" method="post">
      Number 1, <br>
      <input type="text" name="Number_1" required> <br>
      Number 2, <br>
      <input type="text" name="Number_2" required> <br>
      Select what to do with the numbers: <br>
      <input type="checkbox" name="Add" value="Add"> Add <br>
      <input type="checkbox" name="Subtrack" value="Subtrack"> Subtrack <br>
      <input type="checkbox" name="Multiply" value="Multiply"> Multiply <br>
      <input type="checkbox" name="Divide" value="Dived"> Divide <br>
      <input type="submit" name="Calculate" value="Calculate">
    </form>
  </body>
</html>
