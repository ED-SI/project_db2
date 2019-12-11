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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<head>
    <meta charset="utf-8"/>
	<title>Sistema de Gerenciamento de Biblioteca (SGB)</title>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/custom.js"></script>
</head>

<body>

<div class="container">
    <h1><img src="img/impressao.png" heigth="50" width="50"> Sistema de Gerenciamento de Biblioteca (SGB)</h1>
    <div class="panel panel-primary">
    <div class="panel-heading"><strong>Login e Cadastro de Usuário</strong></div>
    <div class="container">
		<div class="col-md-4 col-md-offset-3" align="center">
				<div class="panel panel-login">
                    <div class="col-md-12 col-md-offset-2" align="center">
					<div class="panel-body">
						<div class="row">
							<form id="register-form" action="processa_cadastro.php" method="post" role="form">
								<div class="form-group">
									<input type="text" name="nome" id="reader_name" tabindex="1" class="form-control" placeholder="Nome completo" value="">
								</div>
								<div class="form-group">
									<input type="text" name="login" id="username" tabindex="1" class="form-control" placeholder="Login (usuário)" value="">
								</div>
									<div class="form-group">
										<label>Tipo de usuário</label>
										<select class="form-control" id="tipo" name="tipo">
											<option>Leitor</option>
											<option>Bibliotecário</option>
										</select>
									</div>
								<div class="form-group pass_show">
									<input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha">
								</div>
								<div class="form-group pass_show">
									<input type="password" name="confirma_senha" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirme a senha">
								</div>
								<div class="form-group">
									<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<button class="btn btn-success" input type="submit" name="register-submit" id="register-submit" tabindex="4" value="Register Now">Registrar</button>
								</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
	</div>

    </div>       
    </div>
</div>
</body>
</html>
