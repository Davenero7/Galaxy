<?php


$usuario = $_POST['usuario'];
$password = $_POST['password'];

$consulta = $connect -> prepare("Select * from usuarios where usuario = :usuario and password = :password"):
$consulta-> bindParam(':usuario', $usuario);
$consulta-> bindParam(':Password', $password):
$consulta ->execute():

if ($consulta->rowCount()>=1){
  session_start():
header(principal.php)
}
else {
  echo "Ocurrio un error";
}

//if ($usario && $password)

 ?>
