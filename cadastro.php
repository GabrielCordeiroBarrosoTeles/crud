<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>CADASTRO</title>
    </head>

    <body>
            <?php

           include "menu.php";

             ?>

<div class="container">
   <div class="row">
      <div class="col s6">
        <form action="recebe_cad.php" method="post">
         <label>Nome do Cliente</label>
         <input class="black-text"  type="text" name="nome">
      </div>

      <div class="col s6">
        <br>
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
         <i class="material-icons right">send</i>
</form>
        </button>
      </div>

      
      
      



   </div>

</div>




      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>