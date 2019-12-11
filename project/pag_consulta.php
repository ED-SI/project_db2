<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "projeto_bd2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Sistema de Gerenciamento para Biblioteca (SGB)</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
<div class="container">
	<h1><img src="img/impressao.png" heigth="50" width="50"> Consulta de Livros</h1>
	<div class="panel panel-primary">
		<div class="panel-heading"><strong>Digite abaixo o conteúdo procurado:</strong></div>
            <form method="post" action="processa_consulta.php">

            	<!-- Filtro para busca
            	<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Opções:</label>
  				<select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="opcaoFiltro">
    				<option selected>Selecione...</option>
    				<option value="id">Id</option>
    				<option value="titulo">Título</option>
    				<option value="autor">Autor</option>
    				<option value="editora">Editora</option>
    				<option value="forma_recebimento">Forma de Recebimento</option>
    				<option value="data_recebimento">Data de Recebimento</option>
  				</select>
  				-->

            <div class="panel panel-body">		
                <div class="breadcrumb">
                    <div class="row">
                        <div class="col-xs-6">
					        <div class="input-group">
						        <input type="text" class="form-control" id="procura" placeholder="Digite aqui..." name="busca">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
					        </div>
				        </div>
                        <div class="col-xs-6">
                            <a href="pag_cadastro.php" class="btn btn-success pull-right">Cadastrar novo livro</a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Livros Adicionados</strong></div>     
                        <table class="table table-bordered" id="tabela">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Autor</th>
                                    <th>Editora</th>
                                    <th>Forma de Recebimento</th>
                                    <th>Data de Recebimento</th>
                                    <th class="acoes">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT id, titulo, autor, editora, forma_recebimento, data_recebimento FROM livro";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr><td>".$row["id"]."</td>".
                                                "<td>".$row["titulo"]."</td>".
                                                "<td>".$row["autor"]."</td>".
                                                "<td>".$row["editora"]."</td>".
                                                "<td>".$row["forma_recebimento"]."</td>".
                                                "<td>".$row["data_recebimento"]."</td>".
                                                "<td>
                                                <a class=\"btn btn-warning btn-xs\" href='update.php?id=" .$row['id']." '>Editar</a>
                                                <a class=\"btn btn-danger btn-xs\" href='delete.php?id=" .$row['id']." '>Excluir</a>
                                                </td></tr>";
                                        
                                    }
                                } else {
                                    echo "0 resultados";
                                }
                                $conn->close();

                            ?>             
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="breadcrumb">
                    <div class="row">
                        <div class="col-xs-4">
                            <ul class="pagination">
                                <li><a href="#">&lt; Anterior</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Próximo &gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			    </div>
	        </div>
            </form>
	    </div>
    </div>
</div>
</body>
</html>