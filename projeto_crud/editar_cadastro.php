<?php

    // 1º passo: Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    // 2º passo: Resgatar o id  via GET enviado pelo link criado
    $id_aluno = $_GET['id_aluno'];

    // 3º passo: Construir uma string para realizar a consulta em sql por id
    $sql_editar_id = "SELECT * FROM cadastro_alunos WHERE cadastro_alunos.id = '$id_aluno'";

    // 4º passo: Declarar uma variavel para executar a função mysqli_query
    // que necessita de dois parametros: a variavel de conexão ao banco de dados
    // e a instrução em sql
    $resultado_consulta_id = mysqli_query($conexao, $sql_editar_id);

    // 5º passo: Declarar uma variavel para receber a função que converte
    // o resultado em um array associativo
    $dados_id = mysqli_fetch_assoc($resultado_consulta_id);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro de Alunos</title>
</head>
<body>
<h3>Formulário de Edição de Cadastro de Alunos</h3>

        <form method="post" class='form' action="editar_cadastro.php">
            <!-- nome -->
            <label for="nome_aluno">Nome: </label>
            <input type="text" name="nome_aluno" id="nome_aluno" value=<?php echo $dados_id['nome_aluno'] ?>>

            <!-- email -->
            <label for="email_aluno">E-mail: </label>
            <input type="text" name="email_aluno" id="email_aluno" value=<?php echo $dados_id['email_aluno'] ?>>

            <!-- numero -->
            <label for="numero_aluno">Número: </label>
            <input type="text" name="numero_aluno" id="numero_aluno" value=<?php echo $dados_id['numero_aluno'] ?>>

            <input type="submit" value="Editar">
        </form>

        <h2>
            <a href="listar_cadastro_alunos.php">Voltar</a>
        </h2>
</body>
</html>