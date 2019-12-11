<?php
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $tipo = $_POST['tipo'];
    $senha_cad = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_bd2";

    try {
        $con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if(empty($nome) OR empty($login) OR empty($tipo) OR empty($senha_cad) OR empty($confirma_senha)){
            echo '<script>alert("Você não preencheu todos os campos do cadastro. Clique em OK e digite novamente.")</script>';
            echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/cadastro_usuario.php";
              </script>';
       }

       if ($senha_cad != $confirma_senha) {
            echo '<script>alert("Senhas diferentes foram digitadas. Clique em OK e digite novamente.")</script>';
            echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/cadastro_usuario.php";
              </script>';
       } else {
           $sql = "insert into usuario (nome, login, tipo_usuario, senha) values ('$nome', '$login', '$tipo', '$senha_cad')";
       }
       $con->exec($sql);
        echo '<script>alert("Usuário cadastrado com sucesso!")</script>';
        echo '<script type="text/javascript">
              window.location="http://localhost/projetobdbiblioteca/cadastro_usuario.php";
              </script>';
       }
    catch(PDOException $e)
        {
        echo "Conexão falhou: " . $e->getMessage();
        }
    
    $conn = null;
    ?>