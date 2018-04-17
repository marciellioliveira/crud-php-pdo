<?php

    //Insere dados na tabela

    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $nome = 'Maria';
    $sobrenome = 'Oliveira';
    $email = 'maria@gmail.com';
    $senha = '123';

    try {

        require_once('conexao.php');

        $sql = "INSERT INTO cliente (id, nome, sobrenome, email, senha)
        VALUES (null, '".$nome."', '".$sobrenome."', '".$email."','".$senha."')";

        $con->exec($sql);

        echo "Dados inseridos com sucesso!";
        
        
    } catch (PDOException $e) {

         echo $sql . "<br>" . $e->getMessage();
        
    }

    $con = null;

?>