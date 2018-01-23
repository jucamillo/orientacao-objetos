<?php
include 'conecta_mysql.inc';
$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome', '$email')";

if ($conexao->query($sql) === TRUE){
  echo "Usuário incluido com sucesso!";
} else{
  echo "Erro:" . $sql ."<br>" . $conexao->error;
}
$conexao->close();
?>
