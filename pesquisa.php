<?php 

	include 'conexao.php';

	try {

		$pes=$_POST['pesquisa'];

		switch ($pes) {
			case 'n':
				header('Location:cliente.php?esc='.$pes);
				break;
			case 'r':
				header('Location:cliente.php?esc='.$pes);
				break;
			
			default:
				header('Location:cliente.php?esc='.$pes);
				break;
		}

	} catch(PDOException $e) {

		header('Location: cliente.php?msg='.$res);

		echo "Falha na pesquisa. Erro: ".getMessage();

	}

?>

