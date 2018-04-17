<?php

try {

   require_once('conexao.php');

    $sql = "DELETE FROM cliente WHERE id=1";

    $con->exec($sql);
    echo "Deletado com sucesso";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$con = null;

?>