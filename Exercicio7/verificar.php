<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Cadastro de Viagens</title>
    <link rel="stylesheet" href="bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="exercicio3.css" />

<?php

              if(isset($_POST["nome"])){
                $nome = "POST: ".$_POST["nome"];
                $genero = "POST: ".$_POST["genero"];
                $rua = "POST: ".$_POST["rua"];
                $numero = "POST: ".$_POST["numero"];
                $complemento = "POST: ".$_POST["complemento"];
                $cidade = "POST: ".$_POST["cidade"];
                $estado = "POST: ".$_POST["estado"];
                $cep = "POST: ".$_POST["cep"];
                $telefone = "POST: ".$_POST["teefone"];
                $celular = "POST: ".$_POST["celular"];
                $email = "POST: ".$_POST["email"];
                $cpf = "POST: ".$_POST["cpf"];
                $usuario = "POST: ".$_POST["usuario"];
                $interesse = "POST: ".$_POST["interesse"];

              }

?>

  </head>
  <body style="background-color: #dde9eb;">

      <!--<div class="container">-->
        <div class="row">

          <div class="col-sm-12 nav-tabs">
            <h1>Sistema de Cadastro de Viagens</h1>
          </div>
        </div>
          <div class="row">
            <div class="col-sm-12" style=>
              <p>
                <div class="container">
                       <ul class="nav nav-tabs col-sm-4">
                         <li><a href="home.html">Principal</a></li>
                         <li><a href="cadastrar.html">Cadastro</a></li>
                         <li><a href="listar.html">Listar</a></li>
                         <li class="active"><a href="#">Validar</a></li>
                       </ul>
                     </div>
              </p>
            </div>
          </div>

          <div class="row" align = "center">
            <div class="col-sm-12">
              <?php

              echo "<table>";
              echo "<tr><td>Nome: </td><td>".$_POST["nome"];
              echo "</td></tr>";
              echo "<tr><td>Gênero: </td><td>".$_POST["genero"];
              echo "</td></tr>";
              echo "<tr><td>Rua: </td><td>".$_POST["rua"];
              echo "</td></tr>";
              echo "<tr><td>Número: </td><td>".$_POST["numero"];
              echo "</td></tr>";
              echo "<tr><td>complemento: </td><td>".$_POST["complemento"];
              echo "</td></tr>";
              echo "<tr><td>Estado: </td><td>".$_POST["estado"];
              echo "</td></tr>";
              echo "<tr><td>Cidade: </td><td>".$_POST["cidade"];
              echo "</td></tr>";
              echo "<tr><td>CEP: </td><td>".$_POST["cep"];
              echo "</td></tr>";
              echo "<tr><td>Telefone: </td><td>".$_POST["telefone"];
              echo "</td></tr>";
              echo "<tr><td>Celular: </td><td>".$_POST["celular"];
              echo "</td></tr>";
              echo "<tr><td>Email: </td><td>".$_POST["email"];
              echo "</td></tr>";
              echo "<tr><td>CPF: </td><td>".$_POST["cpf"];
              echo "</td></tr>";
              echo "<tr><td>Usuário: </td><td>".$_POST["usuario"];
              echo "</td></tr>";
              echo "<tr><td>Interesses: </td><td>".$_POST["interesse"];
              echo "</td></tr>";
              echo "</table>";
               ?>
            </div>
          </div>

          <div class="row" align = "center">
            <div class="col-sm-12">
                  <a href=" listar.html"><input type="button" name="salvar" value="Salvar" class="btn btn-info" onClick="alert('Dados Salvos com Sucesso'); return true"></a>

                  <a href=" cadastrar.html"><input type="button" name="nao" value="Não Desejo Salvar" class="btn btn-info" onClick="alert('Seus dados não serao salvos'); return true"></a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12" >
            <div class="footer">
            <footer>
              Aline Marina 14.1.8392
            </footer>
            </div>

          </div>

      <!--  </div> -->

      </div>

  </body>
</html>
