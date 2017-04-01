<?php

	$vis="visualizar.php";

	include 'conexao.php';

	if(isset($_POST['visualizar'])) {
              echo "<h4>Visualizar</h4>";

              echo '
                <form action="'.$pes.'" method="POST" name="teste">
                <div class="form-group">
                   <input name="teste" class="hidden"> 
                </div>      
                  <div class="form-group">                   
                    <h5 for="sel1">Pesquisar por:</h5>
                    <select class="form-control" id="sel1" name="pesquisa">
                      <option value="" disabled selected>Escolha</option>
                      <option value="n">Nome</option>
                      <option value="r">Rg</option>
                    </select>
                  </div>                             
                  <button type="submit" class="btn btn-default">Cadastrar</button>
                  </form>           
              ';
	}

	 if(strpos($_SERVER['REQUEST_URI'], '?')) {
                
        $resultado = $_GET['esc'];

       	 if($resultado == "n") {
           echo "<h5>Pesquisar por nome</h5>";
         } else if($resultado = "r") {
    	  	echo "<h5>Pesquisar por rg</h5>";
         }
        } else {
         # echo "false";
        }

?>