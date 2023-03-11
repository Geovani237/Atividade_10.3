<?php 
$nome = $_POST['nome'];
$categoria = $_POST['categoria_produto'];
$quantidade = $_POST['quantidade'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];

include_once "conexao.php";

$sql = "INSERT into tb_produto(nome_produto,categoria,quantidade,preco_compra,preco_venda)VALUES('$nome','$categoria','$quantidade','$preco_compra','$preco_venda')";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

?>