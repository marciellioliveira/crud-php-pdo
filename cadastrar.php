<?php

	include 'conexao.php';

	try {

		$nomeC=$_POST['nome'];
		$rgC=$_POST['rg'];
		$sexoC=$_POST['sexo'];
		$estado_civilC=$_POST['estado_civil'];

		#$textSQL="INSERT INTO clientes(sexo,estado_civil) VALUES ('".$sexoC."','".$estado_civilC."')";
		#$conn->exec($textSQL);

		$textSQL="INSERT INTO clientes(nome,rg,sexo,estado_civil) VALUES ('".$nomeC."','".$rgC."','".$sexoC."','".$estado_civilC."')";
		$res = $conn->exec($textSQL);

		header('Location: cliente.php?msg='.$res);

	} catch (PDOException $e){

		header('Location: cliente.php?msg='.$res);

		echo "Falha na gravação. Erro: ".getMessage();

	}




?>