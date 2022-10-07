<?php

    include 'conexao.php';

    $nomeCliente        = $_POST ['nomeCliente'];
    $telefoneCliente    = $_POST ['telefoneCliente'];
    $emailCliente       = $_POST ['emailCliente'];
    $enderecoCliente    = $_POST ['enderecoCliente'];
    $cpfCliente         = $_POST ['cpfCliente'];
    $generoCliente      = $_POST ['generoCliente'];

    $sql = "INSERT INTO `cadastro_clientes`(`nomeCliente`, `telefoneCliente`, `emailCliente`, `enderecoCliente`, `cpfCliente`,`generoCliente`) 
    VALUES ('$nomeCliente','$telefoneCliente','$emailCliente','$enderecoCliente','$cpfCliente','$generoCliente')";

    $inserir = mysqli_query($conexao,$sql);
?>

<div class="container" style="width:300px; text-align: center; padding-top: 50px;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <h4>Produto Cadastrado com Sucesso!</h4>

    <div>
        <a href="index.html" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>