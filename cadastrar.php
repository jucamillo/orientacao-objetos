<?php
  require 'clienteForm.php';

  $cliente = new ClienteForm();
  $cliente->nome = $_POST['nome'];
  $cliente->email = $_POST['email'];


$strcon = mysqli_connect('localhost', 'root', 'senha', 'formularioJucamillo') or die('Erro ao conectar no BD');
$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$cliente->nome', '$cliente->email')";
mysqli_query($strcon, $sql) or die ("Erro ao cadastrar");
mysqli_close($strcon);
echo "Sucesso!";
?>
