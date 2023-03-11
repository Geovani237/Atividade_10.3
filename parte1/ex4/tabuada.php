<?php 
$numero = $_POST['numero'];

for($i = 0; $i <=10; $i++){
    $resultado = $i * $numero;
    echo "<tr><td>{$i} x {$numero}</td><td>=</td><td>{$resultado}</td></tr><br>";
}
?>