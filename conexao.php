<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $database   = "loja_informatica";

    $conexao    = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conexao, "utf8");

?>