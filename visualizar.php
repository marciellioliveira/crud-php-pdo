<?php 

	include 'conexao.php';

	try {






	} catch(PDOException $e) {

		header('Location: cliente.php?msg='.$res);

		echo "Falha na alteração. Erro: ".getMessage();

	}

?>

<!-- 

		$pes=$_POST['pesquisa'];

		switch ($pes) {
			case 'n':
				
				echo "Você escolheu pesquisar por nome!";
				break;
			case 'r':
				echo "Você escolheu pesquisar por rg!";
				break;
			
			default:
				echo "Erro na escolha, tente novamente!";
				break;
		}


-->