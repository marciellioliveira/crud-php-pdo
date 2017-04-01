<?php

	try {

	$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=crudphp','root', '');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	#echo "Conexão ok";


	} catch(PDOException $e) {

		echo "ERROR: " . $e->getMessage();

	}


?>