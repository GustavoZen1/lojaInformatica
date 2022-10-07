<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem de produtos</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col" align="">Ação</th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `cadastro_produtos`";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $idProduto          = $array['idProduto'];
                $codigoProduto      = $array['codigoProduto'];
                $nomeProduto        = $array['nomeProduto'];
                $quantidadeProduto  = $array['quantidadeProduto'];
                $categoriaProduto   = $array['categoriaProduto'];
                $fornecedorProduto  = $array['fornecedorProduto'];
            ?>
                <tr>

                    <td><?php echo $codigoProduto ?> </td>
                    <td><?php echo $nomeProduto ?> </td>
                    <td><?php echo $quantidadeProduto ?> </td>
                    <td><?php echo $categoriaProduto ?> </td>
                    <td><?php echo $fornecedorProduto ?> </td>
                    <td><a href="editarProduto.php?id=<?php echo $idProduto  ?>" class="btn btn-secondary active" role="button" aria-pressed="true">Editar</a></td>
                    <td><a href="excluirProduto.php?id=<?php echo $idProduto  ?>" class="btn btn-danger active" role="button" aria-pressed="true">Excluir</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div align="center"><a href="index.html" role="button" class="btn btn-info" >Voltar</a> </div>
</body>

</html>