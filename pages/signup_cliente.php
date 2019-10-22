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
					<a class="nav-link" href="logout.php">Sair</a>
				</li>
				</ul>
			</div>  
		</nav><br>		
			<h1 align="center">CADASTRO DE CLIENTE</h1>
		<div class="row">
			<div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded">
				<form name="signup" method="post" action="#"><br>
					<!-- USUÁRIO (EMAIL) -->
					<div class="form-group">
						<input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
					</div>
					<!-- NOME_CLIENTE -->
					<div class="form-group">
						<input class="form-control" type="text" id="nome_cliente" name="nome_cliente" placeholder="Nome"	required>
					</div>	
					<!-- CPF -->
					<div class="form-group">
						<input class="form-control" type="text" id="cpf_cliente" name="cpf_cliente" placeholder="CPF"	required>
					</div>	
					<!-- ENDEREÇO -->
					<div class="form-group">
						<input class="form-control" type="text" id="end_cliente" name="end_cliente" placeholder="Endereço"	required>
					</div>	
					<!-- TELEFONE -->
					<div class="form-group">
						<input class="form-control" type="text" id="tel_cliente" name="tel_cliente" placeholder="Telefone"	required>
					</div>	
					<input class="btn btn-primary" type="submit" name="submit" value="Concluir">
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
	</div>
	

</body>
</html>