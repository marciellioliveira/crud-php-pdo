<?php 
  include 'header.php'; 
  include 'conexao.php';
  
?>

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

            $pes="pesquisa.php";

            //View Cadastrar = v_cad.php
            include 'v_cad.php';

            //View Visualizar = v_vis.php
            include 'v_vis.php';

             if(strpos($_SERVER['REQUEST_URI'], '?')) {

              $idEscolhido = $_GET['esc'];


               $dados=$conn->query("SELECT * FROM clientes"); 
              #$dados=$conn->query("SELECT * FROM clientes WHERE id=".$idEscolhido); 

              foreach ($dados as $linha) {

                $nomeBD=$linha['nome'];
                $rgBD=$linha['rg'];
                $sexoBD=$linha['sexo'];
                $est_civilBD=$linha['estado_civil'];
              }

              if(($sexoBD == 'f') || ($sexoBD == 'F')) {
                  $sexoCom = "Feminino";
              } else if(($sexoBD == 'm') || ($sexoBD == 'M')) {
                 $sexoCom = "Masculino";
              }

              echo "<h4><strong>Nome:</strong> ".$nomeBD."</h4>";
              echo "<h4><strong>Rg: </strong>".$rgBD."</h4>";
              echo "<h4><strong>Sexo:</strong> ".$sexoCom."</h4>";
              echo "<h4><strong>Estado Cívil:</strong>".$est_civilBD."</h4>";
            
               
              } else {
               # echo "false";
              } #esse else fecha o strpos


            //View Alterar= v_alt.php
            include 'v_alt.php';

            //View Deletar = v_del.php
            include 'v_del.php';

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

<!-- 



-->