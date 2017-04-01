<?php 

	include 'conexao.php';
	$dados=$conn->query("SELECT * FROM clientes"); 
	$dados->execute();

	try {

		$altDados=$_POST['alterarDados'];

		$count=0;
		while ($altDados > 0) {
			
			switch ($altDados) {
				
				case $altDados:
					header('Location:cliente.php?alt='.$altDados);
					break;
				
				default:
					header('Location:cliente.php?alt='.$altDados);
					break;
			}

			echo "Selecionado: ".$altDados;
			break;
			$count++;
		}	

	} catch(PDOException $e) {

		header('Location: cliente.php?alt='.$altDados);

		echo "Falha na alteração. Erro: ".getMessage();

	}

?>