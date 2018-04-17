<?php

    $sobrenome = 'Auxiliadora';

    try {

        require_once('conexao.php');


        $sql = "UPDATE cliente SET sobrenome='".$sobrenome."' WHERE id=1";
        $stmt = $con->prepare($sql);

        $stmt->execute();

        echo $stmt->rowCount() . " Alterado com sucesso!";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

?>