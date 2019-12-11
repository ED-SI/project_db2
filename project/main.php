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
        <div class="row">
            <div class="col-md-12 col-xs-12" align="center">
                <div class="outter"><img src="img/usuario.png" heigth="80" width="80" class="image-circle"/></div>   
            </div>
			<div class="col-md-6 col-md-offset-3" align="center">
				<div class="panel panel-login">
                    <div class="col-md-12 col-md-offset-2" align="center">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-8">
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuário" value="">
									</div>
									<div class="form-group">
										<input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Senha">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Lembre-me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button class="btn btn-success" input type="submit" name="login-submit" id="login-submit" tabindex="4" value="Log In">Login</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="cadastro_usuario.php" tabindex="5" class="forgot-password">Não tenho cadastro</a>
												</div>
											</div>
										</div>
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
    </div>
</div>
</body>
</html>
