<?php
include 'conexao.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container tamanhoFormulario">
        <form action="atualizarProduto.php" method="POST">

            <?php
            $sql = "SELECT * FROM `cadastro_produtos` WHERE idProduto = $id";

            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $idProduto          = $array['idProduto'];
                $codigoProduto      = $array['codigoProduto'];
                $nomeProduto        = $array['nomeProduto'];
                $quantidadeProduto  = $array['quantidadeProduto'];
                $categoriaProduto   = $array['categoriaProduto'];
                $fornecedorProduto  = $array['fornecedorProduto'];
            
            ?>

            <h3 style="text-align:center;">Edução de produtos</h3>
            <br>
            <div class="form-group">
                <label>Código produto</label>
                <input type="number" class="form-control" name="codigoProduto" value="<?php echo $codigoProduto ?>">

                <input type="number" class="form-control" name="id" value="<?php echo $id?>"style = display:none>
            </div>
            <br>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto?>">
            </div>
            <br>
            <div class="form-group">
                <label>Quantidade de produtos</label>
                <input type="number" class="form-control" name="quantidadeProduto" value="<?php echo $quantidadeProduto ?>">
            </div>
            <br>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoriaProduto">
                    <option>Headset</option>
                    <option>Mouse</option>
                    <option>teclado</option>
                    <option>Monitor</option>
                    <option>Web cam</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedorProduto">
                    <option>Microsoft</option>
                    <option>Multilazer</option>
                    <option>Positivo</option>
                    <option>Lenox</option>
                    <option>Apple</option>
                </select>
            </div>
            <br>
            <div class="botao"><button type="submit" class="btn btn-outline-success">Atualizar</button></div>
            <?php } ?>
        </form>
    </div>
</body>

</html>