<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra notas</title>
</head>
<body>
    <form action="salvanotas.php">
	<label for="nota">Nota do aluno:</label>
	<input type="number" name="nota" id="nota" min="0" max="10"><br>

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