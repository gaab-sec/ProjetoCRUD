<?php

    // 1º passo: Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    // 2º passo: Resgatar o id  via GET enviado pelo link criado
    $id_aluno = $_GET['id_aluno'];

    // 3º passo: Construir uma string para realizar a consulta em sql por id
    $sql_excluir_id = "DELETE FROM cadastro_alunos WHERE cadastro_alunos.id = '$id_aluno'";

    // echo "<h3>" . $sql_excluir_id . "</h3>";

    // 4º passo: Realizar o mesmo procedimento realizado ao cadastrar uma info no banco de dados
    if (mysqli_query($conexao, $sql_excluir_id))
    {
        // Utilizando um comando para redirecionar para outra pagina
        header("Location: listar_cadastro_alunos.php");
    } else {
        echo "Erro ao excluir cadastro.";
    }