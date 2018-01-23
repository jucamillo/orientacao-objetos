<?php
 $conexao - mysqli_connect('localhost', 'root', 'senha', 'formularioJucamillo');

 mysqli_set_charset($conexao, 'utf8');

 if($conexao->connect_error){
   die("Falha ao conectar no BD:" . $conexao->connect_error);
 }
?>
