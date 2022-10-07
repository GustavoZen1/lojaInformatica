<?php
include 'conexao.php';

$codigoProduto      = $_POST["codigoProduto"];
$nomeProduto        = $_POST["nomeProduto"];
$quantidadeProduto  = $_POST["quantidadeProduto"];
$categoriaProduto   = $_POST["categoriaProduto"];
$fornecedorProduto  = $_POST["fornecedorProduto"];

$sql = "INSERT INTO `cadastro_produtos`(`codigoProduto`, `nomeProduto`, `quantidadeProduto`, `categoriaProduto`,`fornecedorProduto`) 
VALUES ($codigoProduto,'$nomeProduto',$quantidadeProduto,'$categoriaProduto','$fornecedorProduto')";

$inserir = mysqli_query($conexao, $sql);
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <div class="container" style="text-align: center;">
 <button type="button" class="btn btn-secondary btn-lg">Cadastrado com sucesso!</button>
 </div>