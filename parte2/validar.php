<?php 
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

include_once "conexao.php";

$sql = "SELECT * FROM tb_clientes WHERE cpf = '$cpf' and senha = '$senha'";

$dados = mysqli_query($conexao, $sql);

if($dados ->num_rows > 0) {
    header('location: home.php');
} else{
   header('location: login.php');
}

?>