<?php
	session_start();
	
	if (isset($_POST["usuario"]) && $_POST["senha"]){
		$user = $_POST["usuario"];		
		$pass = $_POST["senha"];
		$cookie_nome = "usuario";
		$cookie_valor = $user;
		setcookie($cookie_nome,$cookie_valor, time() + (60), "/");
		if ($user == "user" && $pass == "1234"){			
			header("location:dbconn.php");		
		}
	} else {
		session_unset();
		header("location:erro.php");
		exit();
	}