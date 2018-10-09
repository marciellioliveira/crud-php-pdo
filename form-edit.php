<?php

require 'init.php';

//Pega ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

//Valida ID
if (empty($id)) {
	echo "ID para alteração não definido.";
	exit;
}

//Busca os dados do usuário a ser editado.
$PDO = db_connect();
$sql = "SELECT name, email, gender, birthdate FROM users WHERE id=:id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

//Se o método fetch não retornar um array, significa que o ID não é de um usuário válido
if (!is_array($user)) {
	echo "Nenhum usuário encontrado";
	exit;
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Edição de Usuário - ULTIMATE PHP</title>
    </head>
 
    <body>
 
        <h1>Cadastro</h1>
 
        <h2>Edição de Usuário</h2>
         
        <form action="edit.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="name" id="name" value="<?php echo $user['name'] ?>">
 
            <br><br>
 
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email" value="<?php echo $user['email'] ?>">
 
            <br><br>
             
            Gênero:
            <br>
            <input type="radio" name="gender" id="gener_m" value="m" <?php if ($user['gender'] == 'm'): ?> checked="checked" <?php endif; ?>>
            <label for="gener_m">Masculino </label>
            <input type="radio" name="gender" id="gener_f" value="f" <?php if ($user['gender'] == 'f'): ?> checked="checked" <?php endif; ?>>
            <label for="gener_f">Feminino </label>
             
            <br><br>
 
            <label for="birthdate">Data de Nascimento: </label>
            <br>
            <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY" value="<?php echo dateConvert($user['birthdate']) ?>">
 
            <br><br>
 
            <input type="hidden" name="id" value="<?php echo $id ?>">
 
            <input type="submit" value="Alterar">
        </form>
 
    </body>
</html>