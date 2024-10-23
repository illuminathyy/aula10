<?php
include 'conexao.php';

$codigosql = "INSERT INTO `turmas` (`id`, `nome`) VALUES (NULL, '{$_GET['nome']}')";

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