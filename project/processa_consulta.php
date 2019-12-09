 <?php
    $search = $_POST['$search'];
 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_bd2";

    //O que falta: pegar o texto do campo de pesquisa e buscar algum registro em todo o banco que tenha o texto do input da pesquisa

    $sql = "SELECT * FROM livro WHERE titulo like $search";
    $result = $conn->query($sql);
    
    echo "$result";

    /*if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<td>".$row["id"]."</td>".
                 "<td>".$row["titulo"]."</td>".
                 "<td>".$row["autor"]."</td>".
                 "<td>".$row["editora"]."</td>".
                 "<td>".$row["forma_recebimento"]."</td>".
                 "<td>".$row["data_recebimento"]."</td>";
            }
    } else {
        echo "0 resultados";
    }


    /*if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td>".
                 "<td>".$row["titulo"]."</td>".
                 "<td>".$row["autor"]."</td>".
                 "<td>".$row["editora"]."</td>".
                 "<td>".$row["forma_recebimento"]."</td>".
                 "<td>".$row["data_recebimento"]."</td>".
                 "<td>
                 <a class=\"btn btn-warning btn-xs\" href=update.php\">Editar</a>
                 <a class=\"btn btn-danger btn-xs\" href=delete.php\">Excluir</a>
                 </td>
                 </tr>";
            }
    } else {
        echo "0 resultados";
    }*/
    $conn->close();
?>             