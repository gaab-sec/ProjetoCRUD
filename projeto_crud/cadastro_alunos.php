<?php
    include "database.php";
    //
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $numero_aluno = $_POST['numero_aluno'];

    //Construir uma string com comando em SQL
    $sql = "INSERT INTO cadastro_alunos (nome_aluno, email_aluno, numero_aluno) VALUES ('$nome_aluno', '$email_aluno', '$numero_aluno')";

    //Criar uma condicional apara inserção de valores na database
    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar.";
    }