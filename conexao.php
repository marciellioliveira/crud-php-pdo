<?php

	//Faz a conexão com o BD

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "crud_php";

	try {
		
		$con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		echo "Conectado!";


	} catch (PDOException $e) {

		echo "Falha na conexão: ".$e->getMessage();
		
	}

?>