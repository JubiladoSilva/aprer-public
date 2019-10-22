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
			<a class="navbar-brand" href="#">APRER</a>
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
		<h1 align="center">CADASTRO DE PROFISSIONAL</h1>
		<div class="row">
			
			<div class="col-3"></div>

			<div class="col-6 d-flex justify-content-center border rounded">
				<form name="signup" method="post" action="#"><br>
					<div>
						<div class="form-group">
							<input class="form-control" type="text" name="usuario" placeholder="Usuário" required value=<?php if(isset($_COOKIE["usuario"]))echo $_COOKIE["usuario"]?>>
						</div>
						<!-- NOME_CLIENTE -->
						<div class="form-group">
							<input class="form-control" type="text" id="nome_profissional" name="nome_profissional" placeholder="Nome"	required>
						</div>	
						<!-- CPF -->
						<div class="form-group">
							<input class="form-control" type="text" id="cpf_profissional" name="cpf_profissional" placeholder="CPF"	required>
						</div>	
						<!-- ENDEREÇO -->
						<div class="form-group">
							<input class="form-control" type="text" id="end_profissional" name="end_profissional" placeholder="Endereço"	required>
						</div>	
						<!-- TELEFONE -->
						<div class="form-group">
							<input class="form-control" type="text" id="tel_profissional" name="tel_profissional" placeholder="Telefone"	required>
						</div>	
						<!-- AREA DE ATUAÇÃO -->
						<div class="form-group">
							<input class="form-control" type="text" id="area_profissional" name="area_profissional" placeholder="Local de atendimento"	required>
						</div>		
						<div class="form-group">
						  <label for="sel1">Especialidade</label>
						  <select class="form-control" id="sel1">
						    <option>Elétrica</option>
						    <option>Hidráulica</option>
						    <option>Pintura</option>
						    <option>Alvenaria</option>
						    <option>Reparo</option>
						    <option>Instalação</option>
						  </select>
						</div>
					</div>
					<!-- USUÁRIO (EMAIL) -->
					
					<input class="btn btn-primary" type="submit" name="submit" value="Concluir">					
				</form>		
			</div>

			<div class="col-3"></div>
			
		</div>
	</div>
	

</body>
</html>