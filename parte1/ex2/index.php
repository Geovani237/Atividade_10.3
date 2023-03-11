<!DOCTYPE html>
<html>
  <head>
    <title>Tabuada do 7</title>
  </head>
  <body>
    <h1>Tabuada do 7:</h1>
    <table>
      <?php
        // Utilizando um loop for para gerar as linhas da tabela
        for ($i = 1; $i <= 10; $i++) {
          // Calculando o resultado da multiplicação
          $resultado = $i * 7;
          // Exibindo a linha da tabela com o valor de $i, o número 7 e o resultado da multiplicação
          echo "<tr><td>{$i} x 7</td><td>=</td><td>{$resultado}</td></tr>";
        }
      ?>
    </table>
  </body>
</html>