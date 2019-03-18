<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Watermelon agenda</title>
    <link rel = "stylesheet" href = "main.css">

  </head>
  <body>

    <div class="Title">
      <p>
         <b>Naam:</b> Noud van der Cruijsen<br>
         <b>Titel:</b> Agenda
      </p>
    </div>

    <br>

    <div class="Contact">
      <form action="PHPpro.1.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Man: <input type="radio" value="Man" name="geslacht">
        Vrouw: <input type="radio" value="Vrouw" name="geslacht">
        Anders: <input type="radio" value="Anders" name="geslacht"> <br>
        <input type="submit" name="Verzenden" value="Verzenden">
      </form>
    </div>

    <div class="Afspraken">
      <?php
      include "PHPfile3.php";
      ?>
    </div>

    <div class="AfspraakMaken">
          <form name = "AfspraakMaken" method = "post">
            <p>Vul hier uw gegevens in voor de afspraak.</p>
              <select name = "AfspraakMaken">
                <p>Wanneer wilt u iets plannen?</p>
                  <input type="text" name="Wanneer"> <br>
                <p>Waar gaat de afspraak over?</p>
                  <textarea name="WatTeDoen" rows="1" cols="20"></textarea>
                <p>Waar is de afspraak?</p>
                  <textarea name="Waar" rows="1" cols="20"></textarea> <br>
                <input type="submit" value="Verzenden">
              </select>
          </form>
          <?php
            include "PHPfile2.php"
          ?>
    </div>

  </body>
</html>
