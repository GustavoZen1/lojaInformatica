<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listar cliente</title>
</head>
<body>
<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome    </th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email   </th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Cpf     </th>
                    <th scope="col">Genero  </th>
                    <th scope="col">Ação    </th>
                </tr>
            </thead>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `cadastro_clientes`";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $idCliente       = $array['idCliente'];
                $nomeCliente     = $array['nomeCliente'];
                $telefoneCliente = $array['telefoneCliente'];
                $emailCliente    = $array['emailCliente'];
                $enderecoCliente = $array['enderecoCliente'];
                $cpfCliente      = $array['cpfCliente'];
                $generoCliente   = $array['generoCliente'];
            ?>
                <tr>

                    <td><?php echo $nomeCliente ?>      </td>
                    <td><?php echo $telefoneCliente ?>  </td>
                    <td><?php echo $emailCliente ?>     </td>
                    <td><?php echo $enderecoCliente ?>  </td>
                    <td><?php echo $cpfCliente ?>       </td>
                    <td><?php echo $generoCliente ?>    </td>
                    <td><a href="editarCliente.php?id=<?php echo $idCliente?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Editar</a></td>
                    <td><a href="editarCliente.php?id=<?php echo $idCliente?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Editar</a></td>
                                       
                </tr>
            <?php } ?>
        </table>
    </div>
    <div align="center"><a href="index.html" role="button" class="btn btn-info" >Voltar</a> </div>
</body>
</html>