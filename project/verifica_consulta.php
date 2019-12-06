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
if (empty($isbn) and empty($titulo) and empty($autor) and empty($editora))
{
echo "Favor digitar pelo menos um campo para realizar a busca.<br>";
$erro=1;
}

if ($erro==0)
{
echo "Busca aceita. Exibindo resultados:";
}
?>

</body>
</html>