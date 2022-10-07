<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário de Produtos</title>
</head>

<body>
    <section>
        <div class="container tamanhoFormulario" style="color: white;">
            <form action="inserirCliente.php" method="POST">
                <h3 style="text-align: center" class="titulo">Cadastro de Clientes</h3>
                <div class="form-group">
                    <label>Nome Cliente</label>
                    <input type="text" class="form-control" name="nomeCliente" placeholder="Entre com o nome do produto:" required>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="telefoneCliente" placeholder="Entre com a quantidade de produto:" required>
                </div>
                <div class="form-group">
                    <label>Email Cliente</label>
                    <input type="text" class="form-control" name="emailCliente" placeholder="Entre com a quantidade de produto:" required>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="enderecoCliente" placeholder="Entre com a quantidade de produto:" required>
                </div>
                <div class="form-group">
                    <label>Cpf</label>
                    <input type="text" class="form-control" name="cpfCliente" placeholder="Entre com esse caraio:" required>
                </div>
                <div class="form-group">
                    <label>Genero</label>
                    <select class="form-control" name="generoCliente">
                        <option>Homi</option>
                        <option>Mulhe</option>
                        <option>Outro</option>
                    </select>
                </div>

                <div class="botao"><a style="text-align:left;" href="index.html" role="button" class="btn btn-outline-info" >Voltar</a>
             <button style="margin-left:305px ;" type="submit" class="btn btn-outline-success">Cadastrar</button></div></div>
            </form>
        </div>
    </section>
</body>

</html>