<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Taxes Calculator</title>
    <?php include "PHP_Scripts/PHP_Exercise_1.php"; ?>
  </head>
  <body>
    <form class="" action="PHP_Scripts/PHP_Exercise_1.php" method="post">
      Price before taxes:
      <input type="text" name="PriceBeforeTaxes"> <br>
      <input type="radio" name="LowTaxes" value="Low, 6%"> Low, 6% <br>
      <input type="radio" name="HighTaxes" value="High, 21%"> High, 21% <br>
      <input type="submit" name="Submit" value="Submit">
    </form>
  </body>
</html>
