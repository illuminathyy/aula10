<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando alunos</title>
</head>
<body>
    <?php
    include 'conexao.php';
   $id = $_GET['id'];
   $comandosql = "SELECT * FROM `alunos` WHERE `nome` = $nome"
   foreach($conexao->query($codigosql) as $linha){
    echo "<option value= '{$linha['id']}'>{$linha['nome']}</option>";
}
</body>
</html>