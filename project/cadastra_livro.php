<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Sistema de Gerenciamento para Bibliotecas (SGB)</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
<div class="container">
	<h1><img src="img/impressao.png" heigth="50" width="50"> Cadastro de Livros</h1>
	<div class="alert alert-info" id="msg">Livro inserido com sucesso!</div>
	<div class="panel panel-primary">
		<div class="panel-heading"><strong>Adicionar livro</strong></div>
		<form method="post" action="processa_livro.php">
		<div class="panel panel-body">		
		<div class="breadcrumb">
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" class="form-control" id="titulo" placeholder="digitar" name="titulo">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" id="autor" placeholder="digitar" name="autor">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Editora</label>
						<input type="text" class="form-control" id="editora" placeholder="digitar" name="editora">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label>Forma de Recebimento</label>
						<select class="form-control" id="forma" name="forma">
							<option>Doação</option>
							<option>Compra</option>
						</select>
					</div>
				</div>
				</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label>Data de Recebimento</label>
						<input type="date" class="form-control" id="data" name="data">
					</div>
				</div>
			</div>
			</div>
			<button class="btn btn-success" onclick="AddItem();"><span class="glyphicon glyphicon-plus"></span>Adicionar</button>
			<a href="busca_livro.php" class="btn btn-success pull-right">Buscar livro</a>
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