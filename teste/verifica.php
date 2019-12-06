<!DOCTYPE html>
<html>
<body>
<?php

$isbn = $_POST["isbn"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$erro = 0;

//Verifica se o campo isbn não está em branco
if (empty($isbn))
{
echo "Favor digitar o código isbn do livro.<br>";
$erro=1;
}

//Verifica se o campo titulo não está em branco
if (empty($titulo))
{
echo "Favor digitar o título do livro.<br>";
$erro=1;
}

//Verifica se o campo autor não está em branco
if (empty($autor) OR strstr($autor, ' ')==false)
{
echo "Favor digitar o nome do autor corretamente.";
$erro=1;
}

if (empty($editora))
{
echo "Favor digite corretamente o nome da editora";
$erro=1;
}

if ($erro==0)
{
echo "Todos os dados foram digitados corretamente!";
include 'insere.inc';
}
?>
<input type="button" value="Cadastro novo livro" onclick="javascript: location.href='index.php';" />
</body>
</html>