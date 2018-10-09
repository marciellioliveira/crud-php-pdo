<?php

require_once 'init.php';

//Pega dados do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;

//Validar para evitar dados vazios
if (empty($name) || empty($email) || empty($gender) || empty($birthdate)) {
	echo "Preencha todos os campos";
	exit;
}

//A data vem no formato dd/mm/YYYY e vou converter para  YYYY-mm-dd
$isoDate = dateConvert($birthdate);

//Insere no banco
$PDO= db_connect();
$sql = "INSERT INTO users(name, email, gender, birthdate) VALUES (:name, :email, :gender, :birthdate)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':birthdate', $isoDate);

if ($stmt->execute()) {
	header('Location: index.php');
} else {
	echo "Erro ao cadastrar";
	print_r($stmt->errorInfo());
}

?>