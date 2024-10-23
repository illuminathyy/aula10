<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra turmas</title>
</head>
<body>
    <form action="salvaalunos.php">
	<label for="nome">Nome do aluno:</label>
	<input type="text" name="nome" id="nome"><br>

    <label for="turmas">Turma:</label>
    <select name="turmas">
        <?php
        include 'conexao.php';
        $codigosql = 'SELECT * FROM `turmas`';

        foreach($conexao->query($codigosql) as $linha){
            echo "<option value= '{$linha['id']}'>{$linha['nome']}</option>";
        }
      ?>

  <option value="turma">Turma</option>
  
</select>
	<input type="submit" value="salvar"> 
    </form>
</body>

</html>