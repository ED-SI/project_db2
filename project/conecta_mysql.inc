<?php
/*$servername = "127.0.0.1";
$username = "root";
$database = "projeto_bd2";
$password = "";
//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/

//Do site concatenar:
//Cria a conexão mysqli_conect('localização do BD','usuario de acesso','senha','banco de dados')
$conexao = mysqli_connect('127.0.0.1','root','','projeto_bd2');

//Ajusta o charset de comunicação entre a aplicação e o banco de dados
mysqli_set_charset($conexao,'utf8');

//Verifica a conexão
if ($conexao->connect_error)
{
die("Falha ao realizar a conexão: " . $conexao->connect_error);
}

?>