<?php include 'header.php'; ?>

<div class="jumbotron">
  		
  		<div class="container">
  			
  			<div class="row">
  			
        <!-- Menu -->
			  <div class="col-sm-4">        
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" name="teste">          
            <div class="list-group" name="crud">
              <button type="submit" name="menu" class="list-group-item">Menu</button>
              <button type="submit" name="cadastrar" class="list-group-item">Cadastrar</button>
              <button type="submit" name="visualizar" class="list-group-item">Visualizar</button>
              <button type="submit" name="alterar" class="list-group-item">Alterar</button>
              <button type="submit" name="deletar" class="list-group-item">Deletar</button>
            </div>         
          </form>
        </div>

        <!-- Inputs -->
			  <div class="col-sm-4">

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
                 }

              } else {
               # echo "false";
              }


            if(isset($_POST['visualizar'])) {
              echo "<h4>Visualizar</h4>";

             
            }

            if(isset($_POST['alterar'])) {
              echo "<h4>Alterar</h4>";

              
            }

            if(isset($_POST['deletar'])) {
              echo "<h4>Deletar</h4>";

             
            }






             # $teste=$_POST['crud'];
             # echo "<h1>".$teste."</h1>";

         

          ?>
        </div>




        <!-- Visualização -->
			  <div class="col-sm-4">.col-sm-4</div>
				
  			</div>
  		</div>
</div>

<?php include 'footer.php'; ?>