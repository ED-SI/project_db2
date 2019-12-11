<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_registro = "select * from livro where id = '$id'";
$resultado_registro = mysqli_query($conn, $result_registro);
$row_usuario = mysqli_fetch_assoc($resultado_registro);
?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Cadastro de Livros</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
<div class="container">
	<h1><img src="img/impressao.png" heigth="50" width="50"> Cadastro de Livros</h1>
	<div class="alert alert-info" id="msg">Livro editado com sucesso!</div>
	<div class="panel panel-primary">
		<div class="panel-heading"><strong>Editar livro</strong></div>
		<form method="post" action="processa_update.php">
		<div class="panel panel-body">		
		<div class="breadcrumb">
			<div class="row">
                <div>
                    <input type="hidden" id="id" name="id" value="<?php echo $row_usuario['id'];?>">
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $row_usuario['titulo'];?>">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" id="autor" name="autor" value="<?php echo $row_usuario['autor'];?>">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Editora</label>
						<input type="text" class="form-control" id="editora" name="editora" value="<?php echo $row_usuario['editora'];?>">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label>Forma de Recebimento</label>
						<select class="form-control" id="forma" name="forma" value="<?php echo $row_usuario['forma'];?>">
							<option>Doação</option>
							<option>Compra</option>
						</select>
					</div>
				</div>
				</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label>Data de recebimento</label>
						<input type="date" class="form-control" id="data" name="data" value="<?php echo $row_usuario['data'];?>">
					</div>
				</div>
			</div>
			</div>
			<button class="btn btn-success" onclick="AddItem();"><span class="glyphicon glyphicon-plus"></span>Adicionar</button>
			</br>
			</br>
			</div>
			</div>
		</form>
	</div>
		
	</div>
</div>
</div>
</body>
</html>