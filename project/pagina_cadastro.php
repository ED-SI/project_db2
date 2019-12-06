<!DOCTYPE html>
<html lang = "pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Cadastrar Livro</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>
<body>
<form action="verifica_cadastro.php" method="POST">
<div class="container">
	<h1><img src="img/impressao.png" heigth="50" width="50"> Controle de Biblioteca</h1>
	<div class="alert alert-info" id="msg">Livro inserido com sucesso!</div>
	<div class="panel panel-primary">
		<div class="panel-heading"><strong>Adicionar livro</strong></div>
		<div class="panel panel-body">
		
		<div class="breadcrumb">
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<label>ISBN</label>
						<input type="text" class="form-control" id="isbn" name="isbn">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Título</label>
						<input type="text" class="form-control" id="titulo" name="titulo">
					</div>
				</div>
				<div class="col-xs-2">
					<div class="form-group">
						<label>Autor</label>
						<input type="text" class="form-control" id="autor" name="autor">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<label>Editora</label>
						<input type="text" class="form-control" id="Editora" name="editora">
					</div>
				</div>
			</div>
		</div>
		<input type="submit" value="Efetuar Cadastro" name="enviar">
		</form>
		</br>
		</br>
		<table class="table table-bordered" id="tabela">
			<thead>
				<tr>
					<th>Título</th>
					<th>Autor</th>
					<th>Nº de cópias</th>
					<th>Serviço</th>
					<th>Frente e verso</th>
					<th>Data de entrega</th>
					<th>Valor</th>
				</tr>
			</thead>
		<tbody>
		
		
		</tbody>
		</table>
		</div>
		</div>
	</div>
		
	</div>
</div>
</div>
</body>
</html>