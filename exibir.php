<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
            <?php

           include "menu.php";

             ?>

<div class="container">

<div class="row">
    
   <h3 class="black-text">DADOS DO CLIENTE</h3>


    <table class="centered black-text bordered highlight">
        <thead>
          <tr class="#e65100 orange darken-4 white-text">
              <th>ID</th>
              <th>NOME</th>
              <th>EDITAR</th>
          </tr>
        </thead>  
<?php


  include "conexao.php";
  $consultar = "SELECT * FROM cliente ";
  $con = $mysqli ->query($consultar) or die($mysqli -> errno);
  while($dados = $con -> fetch_array()){ 

?>

<tbody>
    <tr  class="#ffab40 orange accent-2">
        <td><?php echo $dados['id']; ?> </td>
        <td><?php echo $dados['nome']; ?> </td>
       <td>
         <a href="recebe_editar.php?id=<?php echo $dados['id']; ?>">
          <i class="material-icons">edit</i>
        </a>
       </td>
       <td>
         <a href="recebe_deletar.php?id=<?php echo $dados['id']; ?>">
          <i class="material-icons">delete</i>
        </a>
       </td>

<?php } ?>
          </table>


  </div>
  </div>
  




      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>