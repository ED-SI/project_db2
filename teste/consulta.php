<?php
 // Conectando ao banco de dados:
 include 'conecta_mysql.inc';
 
 // Recebendo os dados a pesquisar
 $isbn = $_POST['isbn'];
 $titulo = $_POST['titulo'];
 $autor = $_POST['autor'];
 $editora = $_POST['editora'];
?>

 <html>
 <head>
 <link href="estilos.css" rel="stylesheet" type="text/css">
 <title>Resultado da pesquisa</title>
 </head>
 <body>
 
 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:50%'>
 <tr>
 <th>ISBN</th>
 <th>TITULO</th>
 <th>AUTOR</th>
 <th>EDITORA</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM livros WHERE ISBN = '$isbn' OR titulo = '$titulo' OR autor = '$autor' OR editora = '$editora'";
 //mysqli_query parametros: (conexão, sql)
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $show_isbn = $registro['ISBN'];
   $show_titulo = $registro['titulo'];
   $show_autor = $registro['autor'];
   $show_editora = $registro['editora'];
   echo "<tr>";
   echo "<td>".$show_isbn."</td>";
   echo "<td>".$show_titulo."</td>";
   echo "<td>".$show_autor."</td>";
   echo "<td>".$show_editora."</td>";
   echo "</tr>";
 }
 mysqli_close($conexao);
 echo "</table>";
?>
</body>
</html>