<?php

	$vis="visualizar.php";	

	include 'conexao.php';
	$dados=$conn->query("SELECT * FROM clientes");  

	if(isset($_POST['visualizar'])) {
              echo "<h4>Visualizar</h4>";

              echo '
                <form action="'.$pes.'" method="POST" name="teste">
                <div class="form-group">
                   <input name="teste" class="hidden"> 
                </div>      
                  <div class="form-group">                   
                    <h5 for="sel1">Escolha:</h5>
                    <select class="form-control" id="sel1" name="pesquisa">
                      <option value="" disabled selected>Escolha</option>';
                     		foreach($dados as $linha)
						    {
						    	$idCons=$linha['id'];
						    	$nomeCons=$linha['nome'];
						    	echo '<option value="'.$idCons.'">'.$nomeCons.'</option>';					    	
							}						

	           echo '</select>
                  </div>                             
                  <button type="submit" class="btn btn-default">Visualizar</button>
                  </form>  ';                      
	}

?>