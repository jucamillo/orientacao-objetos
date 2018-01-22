<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exibe</title>
  </head>
  <body>
    <?php
      require 'clienteForm.php';

      $cliente = new ClienteForm();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

     ?>
    <h1>
      Cliente
    </h1>

    <h3>Nome: <?php echo "$cliente->nome"; ?> </h3>
    <h3>E-mail: <?= $cliente->email ?> </h3>
  </body>
</html>
