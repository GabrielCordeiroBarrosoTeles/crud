
<?php
include './conexao.php';
include './menu.php';

  $id = $_GET['id'];
  
  $consultar = "SELECT * FROM cliente WHERE id ='$id' ";
  $con = $mysqli ->query($consultar) or die($mysqli -> errno);
  while($dados = $con -> fetch_array()){ 
  $id = $dados['id'];
  $nome = $dados['nome'];
  
  echo "Deletando os Sr.<br>",$nome;
  
  
  
$alt = $mysqli-> query
 ("DELETE from cliente  WHERE id=$id");

  }
  
  ?>