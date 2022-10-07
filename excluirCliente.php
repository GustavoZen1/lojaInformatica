<?php
    include 'conexao.php';
    $id = $_GET['id'];

    $sql= "DELETE FROM `cadastro_clientes` WHERE idProduto= $id";

    $deletar = mysqli_query($conexao,$sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <div class="container" style="text-align: center; padding: 30px;">
 
 <h1 style="padding: 30px;" >Excluído com sucesso!</h1>
 <a href="listarCliente.php"><button style="padding: 30px;" type="button" class="btn btn-secondary btn-lg">Voltar a tabela</button></a>
 
 </div>