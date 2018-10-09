<?php

require 'init.php';

//Resgata os valores do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;

// validação (bem simples, mais uma vez)
if (empty($name) || empty($email) || empty($gender) || empty($birthdate))
{
    echo "Volte e preencha todos os campos";
    exit;
}

// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($birthdate);

// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE users SET name = :name, email = :email, gender = :gender, birthdate = :birthdate WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':birthdate', $isoDate);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}

?>