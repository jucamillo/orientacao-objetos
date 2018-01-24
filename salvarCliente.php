<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro do cliente 2</title>
  </head>
  <body>
    <?php
      require 'clienteForm.php';

      $cliente = new ClienteForm();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      $servidor = "localhost";
      $usuario = "root";
      $senha = "senha";
      $banco = "novobd";

      $conexao = new mysqli($servidor, $usuario, $senha, $banco) or die("Erro de conexao: $conexao->connect_error");

      $sql = "INSERT INTO clientes (nome, email) VALUES
              (?, ?)";

      $comando = $conexao->prepare($sql);

      $comando->bind_param("ss", $cliente->nome, $cliente->email);

      $saida = $comando->execute();
?>

  <h1>Cliente</h1>

      <?php if($saida === true){?>
          <h3>Cliente: <em><?= $cliente->nome ?></em>, email: <em><?= $cliente->email ?></em> salvo com sucesso</h3>

      <?php } else { ?>

          <h3>Erro: <?= $conexao->error ?> </h3>
          <h3>Sql: <?= $sql ?> </h3>

        <?php }
          $comando->close();
          $conexao->close();

          ?>




  </body>
</html>
