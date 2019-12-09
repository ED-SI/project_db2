<?php
$id = $POST['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "delete from livro where id=".$id;

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Livro deletado com sucesso";
    header("location:http://localhost/projetobdbiblioteca/index.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>