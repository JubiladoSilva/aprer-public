<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>APRER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<a class="navbar-brand" href="../index.php">APRER</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Entrar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Cadastrar</a>
				</li>
				</ul>
			</div>  
		</nav><br>
		<div class="row">

				<div class="col-3"></div>

				<div class="col-6 d-flex justify-content-center border rounded">
					<form name="login" method="post" action="loginhandle.php"><br>
						<div class="form-group">
							<input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
						</div>
						<div class="form-group">
							<input class="form-control" type="password" name="senha" placeholder="Senha" required>
						</div>
						<div class="form-group">
							<a href="#">Redefinir senha</a>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="submit" value="login">						
						</div>						
					</form>
				</div>

				<div class="col-3"></div>
				
			</div>
		</div>
		
	</div>
</body>
</html>