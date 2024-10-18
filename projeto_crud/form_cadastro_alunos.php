<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Alunos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>      
        <h3>Formulário de Cadastro de Alunos</h3>
        <form method="post" class='form' action="cadastro_alunos.php">
            <!-- nome -->
            <label for="nome_aluno">Nome: </label>
            <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe o Nome">

            <!-- email -->
            <label for="email_aluno">E-mail: </label>
            <input type="text" name="email_aluno" id="email_aluno" placeholder="Informe o E-mail">

            <!-- numero -->
            <label for="numero_aluno">Número: </label>
            <input type="text" name="numero_aluno" id="numero_aluno" placeholder="Informe o Celular">

            <input type="submit" value="Cadastrar">
        </form>

        <h2>
            <a href="index.php">Voltar</a>
        </h2>
        
    </body>
</html>