<!DOCTYPE html>
<html>
  <head>
    <title>Números Pares</title>
  </head>
  <body>
    <h1>Números Pares de 175 a 310:</h1>
    <ul>
      <?php
        for ($i = 176; $i <= 310; $i += 2) {
          echo "<li>{$i}</li><br>";
        }
      ?>
    </ul>
  </body>
</html>