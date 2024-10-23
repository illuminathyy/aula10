<?php
include 'conexao.php'

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO `turmas` (`id`, `nome`) VALUES (NULL, '{$_GET['nome']}')";

try {
    $resultado = $conexao->query($codigoSQL);
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