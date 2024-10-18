<?php
// Arquivo de configuração de conexão ao banco de dados
    //Declaração de variáveis para conectar a database

    $servidor = "localhost";
    $servidor_user = "root";
    $servidor_password = "";
    $database = "aula_crud";

    //Declarar variável para receber a função de conexão do banco de dados
    $conexao = mysqli_connect($servidor, $servidor_user, $servidor_password, $database);
    