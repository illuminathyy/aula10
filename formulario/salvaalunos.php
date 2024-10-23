<?php
include 'conexao.php'
echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO `turmas` (`id`, `nome`, `id_turma`) VALUES (NULL, :nm, :tm;

try {
    $resultado = $conexao->query($codigosql);
    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
?>