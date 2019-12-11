 <?php
    $busca = $_POST['busca'];
 
    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_bd2";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    if(!$conn){
        die('Não foi possível conectar ao banco de dados: ' . mysql_error());
    }

    $query = "SELECT * FROM livro WHERE (titulo = '$busca') OR (autor = '$busca') OR (editora = '$busca') OR (forma_recebimento = '$busca') OR (data_recebimento = '$busca') ";

    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Id: ".$row["id"]." - Titulo: ".$row["titulo"]." - Autor: ".$row["autor"]." - Editora: ".$row["editora"]." - Forma de Recebimento: ".$row["forma_recebimento"]." Data de Recebimento: ".$row["data_recebimento"]."<br>";
        }
    } else {
        echo "0 resultados";
    }
?>             