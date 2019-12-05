<!doctype html>

<?php include "data.inc";?>

<html>
<head>
	<title>Consulta - Teste</title>
</head>
<body>
	
<h1>Consulta de Livros</h1>
<br>

<form action="consulta.php" method="POST">
<pre>
Insira as informações para pesquisar.

ISBN: <input type="text" size="35" maxlength="256" name="isbn">
Título: <input type="text" size="35" maxlength="256" name="titulo">
Autor: <input type="text" size="35" maxlength="256" name="autor">
Editora: <input type="text" size="35" maxlength="256" name="editora">

<input type="submit" value="Buscar" name="enviar">

</pre>
	
</form>

</body>
</html>