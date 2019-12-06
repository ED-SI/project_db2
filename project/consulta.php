<?php include("conecta_mysql.inc");
$sql = "SELECT titulo FROM livro";
$con = $mysqli->query($consulta) or die($mysqli->error);
echo "<table>";
while($exibe = $con->fetch_array()){
   echo "<tr><td>Titulo:</td>";
   echo "<td>".$exibe["Titulo"]."</td></tr>";
}
echo "</table>";
?>