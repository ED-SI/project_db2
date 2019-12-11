<?php
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $forma = $_POST['forma'];
    $data = $_POST['data'];

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_bd2";

    try {
        $con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(empty($titulo) OR empty($autor) OR empty($editora) OR empty($forma) OR empty($data)){
            echo '<script>alert("Você não preencheu todos os campos do cadastro. Clique em OK e digite novamente.")</script>';
            echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/index.php";
              </script>';
       } else {
           $sql = "insert into livro (titulo, autor, editora, forma_recebimento, data_recebimento) values ('$titulo', '$autor', '$editora', '$forma', '$data')";
       }
       $con->exec($sql);
       echo '<script>alert("Livro cadastrado com sucesso! Retornando à tela de cadastro.")</script>';
       echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/pag_add.php";
              </script>';
       }
    catch(PDOException $e)
        {
        echo "Conexão falhou: " . $e->getMessage();
        }
    
    $conn = null;
    ?>