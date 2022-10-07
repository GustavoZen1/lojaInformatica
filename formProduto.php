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
    <div style="color:aliceblue" class="container tamanhoFormulario ">
        <form action="inserirProduto.php" method="POST">
            <h3 style="text-align:center; color:aliceblue;" class="titulo">Cadastro de produtos</h3>
            <br>
            <div class="form-group">
                <label>Código produto</label>
                <input type="number" class="form-control" name="codigoProduto" placeholder="Entre com o código do produto" required>
            </div>
            <br>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Entre com o nome do produto" required>
            </div>
            <br>
            <div class="form-group">
                <label>Quantidade de produtos</label>
                <input type="number" class="form-control" name="quantidadeProduto" placeholder="Entre com a quantidade de produtos"  required>
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
            <div>            <div class="botao"><a style="text-align:left;" href="index.html" role="button" class="btn btn-outline-info" >Voltar</a>
             <button style="margin-left:305px ;" type="submit" class="btn btn-outline-success">Cadastrar</button></div></div>
            
            
        </form>
    </div>
</body>

</html>