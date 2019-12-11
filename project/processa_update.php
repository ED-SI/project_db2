<?php

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $forma = $_POST['forma'];
    $data = $_POST['data'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(empty($titulo) OR empty($autor) OR empty($editora) OR empty($forma) OR empty($data)){
                echo '<script>alert("Você não preencheu todos os campos do cadastro. Clique em OK e digite novamente.")</script>';
                echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/update.php?id=$id";
              </script>';
        } else {     
            $sql = "UPDATE livro SET titulo='$titulo', autor='$autor', editora='$editora', forma_recebimento='$forma', data_recebimento='$data' WHERE id='$id'";
    
            // Prepare statement
            $stmt = $conn->prepare($sql);
        
            // execute the query
            $stmt->execute();
        
            // echo a message to say the UPDATE succeeded
            echo '<script>alert("Registro editado com sucesso!")</script>';
            echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/index.php";
              </script>';
            }
        }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conn = null;
    ?>


    
 