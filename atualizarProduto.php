<?php

    include 'conexao.php';
    $id = $_POST['id'];

    $codigoProduto      = $_POST['codigoProduto'];
    $nomeProduto        = $_POST['nomeProduto'];
    $quantidadeProduto  = $_POST['quantidadeProduto'];
    $categoriaProduto   = $_POST['categoriaProduto'];
    $fornecedorProduto  = $_POST['fornecedorProduto'];

    $sql = "UPDATE `cadastro_produtos` SET codigoProduto = $codigoProduto,
    `nomeProduto`='$nomeProduto',quantidadeProduto = $quantidadeProduto,`categoriaProduto`=
    '$categoriaProduto',`fornecedorProduto`='$fornecedorProduto' WHERE idProduto = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <div class="container" style="text-align: center; padding: 30px;">
 
 <h1 style="padding: 30px;" >Atualizado com sucesso!</h1>
 <a href="listarProduto.php"><button style="padding: 30px;" type="button" class="btn btn-secondary btn-lg">Voltar a tabela</button></a>
 
 </div>