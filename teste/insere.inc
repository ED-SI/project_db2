<?php

include 'conecta_mysql.inc';

$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];

$sql = "INSERT INTO livro VALUES";
$sql .= "('$isbn','$titulo','$autor','$editora')";

if ($conexao->query($sql) === TRUE)
{
	echo "Livro cadastro com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao-error;
}

$conexao->close();

?>