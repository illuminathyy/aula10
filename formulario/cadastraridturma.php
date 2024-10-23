<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra ID turmas</title>
</head>
<body>
    <?php
    include 'conexao.php';

   $comandosql = "SELECT * FROM `alunos` WHERE `id` = $id"
   foreach($conexao->query($codigosql) as $linha){
    $id = $linha['id'];
    $nome = $linha['nome'];
    echo "<a href='mostra_alunos.php?id=$id'>$nome</a><br>";

}
    ?>
</body>

</html>