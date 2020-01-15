<!DOCTYPE html>

<?php
  session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Bit Academy</title>
  </head>
  <body>

    <form method="post">
      <input type="number" name="Nummer" value="" placeholder="1 t/m 10">
      <input type="submit" name="" value="Verstuur">
    </form>

    <?php

    try {
      if (isset($_POST["Nummer"])) {
        $_SESSION["Nummer"] = $_POST["Nummer"];
        }   if ($_SESSION["Nummer"] > 10) {
            throw new Exception("Nummer is grooter dan 10");
            }  if ($_SESSION["Nummer"] < 1) {
                throw new Exception("Nummer is lager dan 1");
              } else {
                echo "Je nummer is " . "#" . $_SESSION["Nummer"];
              }

    } catch (\Exception $error) {
      echo "Error: " .$error->getMessage();
    }

    ?>

  </body>
</html>
