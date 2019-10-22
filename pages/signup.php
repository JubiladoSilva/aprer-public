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
					<a class="nav-link" href="login.php">Entrar</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Cadastrar</a>
				</li>
				</ul>
			</div>  
		</nav><br>
		<div class="row">

			<div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded">
				<form name="signup" method="post" action="signuphandle.php"><br>
					<div class="form-group">
						<input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
					</div>			
					<div class="form-group">
						<input class="form-control" type="password" id="senha" name="senha" placeholder="Senha"	required>
					</div>					
					<div class="form-group">
						<input class="form-control" type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Repita a Senha" required>
					</div>	
					<div>
					  	<label class="radio-inline"><input type="radio" name="usuario_tipo" value="cliente" checked> Cliente</label>
					  	<label class="radio-inline"><input type="radio" name="usuario_tipo" value="profissional"> Profissional</label>					  	
					</div>
										
					
					<input class="btn btn-primary" type="submit" name="submit" value="Cadastrar">
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
	</div>
	
	<script src="../js/checkpassword.js"></script>		

</body>
</html>