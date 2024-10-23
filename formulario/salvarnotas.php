<?php

include 'conexao.php';
echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";

$codigoSQL = "INSERT INTO `notas` (`valor`) VALUES (NULL, {$_GET['notas']}')";

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