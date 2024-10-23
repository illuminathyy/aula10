<?php

include 'conexao.php';
echo "Conectado!<br>";

$notas = $_GET['notas'];
$turmas = $_GET['id_turmas'];
$aluno = $_GET['id_aluno'];

$codigoSQL = "INSERT INTO `notas` (`id`, `valor`, `id_aluno`, `id_turma`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['id_turmas']}', '{$_GET['id_notas']}'));";

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