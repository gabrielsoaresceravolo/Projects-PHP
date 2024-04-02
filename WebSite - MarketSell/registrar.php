<?php
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MarketSell</title>
  </head>

  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">

            <div class="card-header">
              Cadastrar-se no MarketSell
            </div>

            <div class="card-body">
              <form action="" method="POST">

                <div class="mb-3">
                  <label class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Senha</label>
                  <input type="password" class="form-control" name="senha1" placeholder="Digite sua senha" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Confirmar Senha</label>
                  <input type="password" class="form-control" name="senha2" placeholder="Confirme sua senha" autocomplete="off" required>
                </div>

                <button type="submit" class="btn btn-primary" onclick="cadastrar()">Acessar</button>

              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  </body>
</html>

<?php

    date_default_timezone_set('Brazil/East');
    $data = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    function cadastrar($nome, $email, $senha1, $senha2)
    {
        $nome = $_POST['nome'];
        $nome = htmlspecialchars($nome,ENT_QUOTES);

        $email = $_POST['email'];
        $email = htmlspecialchars($email,ENT_QUOTES);

        $senha1 = $_POST['senha1'];
        $senha1 = htmlspecialchars($senha1,ENT_QUOTES);

        $senha2 = $_POST['senha2'];
        $senha2 = htmlspecialchars($senha2,ENT_QUOTES);

        $senhaCrip = hash('sha384', $senha2);

        // =========================================================================

        if (empty($email)) // Verificar se o email foi digitado
        {
            echo "<script>window.alert('Digite o e-mail!'); </script>";
            return false;
        }
        if (empty($senha1)) // Verificar se a senha foi digitada
        {
            echo "<script>window.alert('Digite a senha!'); </script>";
            return false;
        }
        if (empty($senha2)) // Verificar se senha de confirmação foi digitada
        {
            echo "<script> window.alert('Confirme a senha!'); </script>";
            return false;
        }

        if(strlen($senha1) < 6) // Verificar tamanho da senha
        {
        echo "<script> window.alert('Sua senha deve conter no mínimo 6 digitos!'); </script>";
        return false;
        }
        if ($senha1 != $senha2) // Verificar se as senhas são iguais
        { 
            echo "<script> window.alert('Senhas Diferentes!'); </script>";
            return false;
        }

        // =========================================================================

        $veric = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
        $verifc = mysqli_num_rows($veric);

        if($verifc == true) // Já existe um cadastro
        {
            echo "<script> window.alert('Você já cadastrou!'); </script>";
            echo "<meta http-equiv='refresh' content='0; index.php'>";
            return false;
        }
        else
        {
            $sqli = mysqli_query($conn, "INSERT INTO users (nome, email, senha, ip, data) VALUES ('$nome', '$email', '$senhacrip', '$ip', '$data')");
        }
    }
?>