<?php
    //1º incluir o arquivo de conexão com o banco de dados
    include 'database.php';

    //2º construir a string em SQL (comando q será executado)
    $sql_listar = "SELECT * FROM cadastro_alunos";

    //3º declarar uma variavel que ira receber o resultado da funcao mysqli_query ao qual ira realizar a conexao com o banco de dados e executar o comando em SQL
    $resultado = mysqli_query($conexao, $sql_listar);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listar.css">
</head>
<body id="table">
    <table border='1'>
        <!-- Cabeçalho da tabela -->
        <thead>
            <!-- trtr - Table Row - linha da tabela -->
            <tr>
                <th>Nome: </th>
                <th>Email: </th>
                <th>Celular: </th>
                <th class='table_button'></th>
                <th class='table_button'></th>
            </tr>
        </thead>
        <!-- Corpo da tabela -->
        <tbody>
            <?php
                while($dados = mysqli_fetch_assoc($resultado)):
            ?>
            <tr>
                <!-- td - Table Data - campo para receber o valor -->
                <td><?php echo $dados['nome_aluno'] ?></td>
                <td><?php echo $dados['email_aluno'] ?></td>
                <td><?php echo $dados['numero_aluno'] ?></td>
                <td class='table_button'>
                    <a href="editar_cadastro.php?id_aluno=<?php echo $dados['id']; ?>">
                        <button type="submit">Editar</button>
                    </a>
                </td>
                <td class='table_button'>
                    <a href="excluir_cadastro.php?id_aluno=<?php echo $dados['id']; ?>">
                        <button type="submit">Excluir</button>
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    
    <?php
        
    ?>

    <h2>
        <a href="index.php">Voltar</a>
    </h2>
</body>
</html>