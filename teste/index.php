<!doctype html>

<?php include "data.inc";?>

<html>
<head>
	<title>Cadastro - Teste</title>
</head>
<body>
	
<h1>Cadastro de Livros</h1>
<br>

<form action="verifica.php" method="POST">
<pre>
Insira as informações para efetuar o cadastro de livros.

ISBN: <input type="text" size="35" maxlength="256" name="isbn">
Título: <input type="text" size="35" maxlength="256" name="titulo">
Autor: <input type="text" size="35" maxlength="256" name="autor">
Editora: <input type="text" size="35" maxlength="256" name="editora">

<input type="submit" value="Efetuar Cadastro" name="enviar">

</pre>
	
</form>

</body>
</html>