<?php 
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 18){
    echo "Olá " . $nome . ", você é maior de idade";
} else {
    echo "Olá " . $nome . ", você é menor de idade";
}
?>