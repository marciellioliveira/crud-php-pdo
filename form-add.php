<?php require 'init.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
</head>
<body>

	<h1>Cadastro</h1>
	<h2>Cadastro de Usuário</h2>

	<form action="add.php" method="POST">
		<label for="name">Nome: </label>
         <br>
         <input type="text" name="name" id="name">
 
         <br><br>
  
         <label for="email">Email: </label>
         <br>
         <input type="text" name="email" id="email">
 
         <br><br>
           
        Gênero:
        <br>
        <input type="radio" name="gender" id="gener_m" value="m">
        <label for="gener_m">Masculino </label>
        <input type="radio" name="gender" id="gener_f" value="f">
        <label for="gener_f">Feminino </label>
             
        <br><br>
 
        <label for="birthdate">Data de Nascimento: </label>
        <br>
        <input type="text" name="birthdate" id="birthdate" placeholder="dd/mm/YYYY">
 
        <br><br>
 
        <input type="submit" value="Cadastrar">
	</form>

</body>
</html>