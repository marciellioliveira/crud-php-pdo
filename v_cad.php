<?php

	$cad="cadastrar.php";

	include 'conexao.php';

            if(isset($_POST['cadastrar'])) {
              echo "<h4>Cadastrar<h4>";              

              echo '                
                <form action="'.$cad.'" method="POST" name="teste">
                  <div class="form-group">
                    <h5>Nome:</h5>
                    <input type="text" class="form-control" name="nome" id="nome">
                  </div>
                  <div class="form-group">
                    <h5>RG:</h5>
                    <input type="text" class="form-control" name="rg" id="rg">
                  </div>
                  <div class="form-group">                   
                    <h5 for="sel1">Sexo:</h5>
                    <select class="form-control" id="sel1" name="sexo">
                      <option value="" disabled selected>Escolha</option>
                      <option value="f">Feminino</option>
                      <option value="m">Masculino</option>
                    </select>
                  </div>
                  <div class="form-group">                   
                    <h5 for="sel1">Estado Cívil:</h5>
                    <select class="form-control" id="sel1" name="estado_civil">
                      <option value="" disabled selected>Escolha</option>
                      <option value="solteiro">Solteiro</option>
                      <option value="casado">Casado</option>
                      <option value="divorciado">Divorciado</option>
                      <option value="viuvo">Viúvo</option>
                      <option value="separado">Separado</option>
                    </select>
                  </div>                             
                   <button type="submit"  class="btn btn-default">Cadastrar</button>                   
                </form>
              ';
            }

              if(strpos($_SERVER['REQUEST_URI'], '?')) {
               
                $resultado = $_GET['msg'];

                if($resultado == 1) {
                  echo "<h5>Cadastrado com sucesso</h5>";
                 } else {
               # echo "false";
              }
            
          } #fecha strpos


?>