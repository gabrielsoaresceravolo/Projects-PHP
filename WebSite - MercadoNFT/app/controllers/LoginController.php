<?php

require('../../database/database.php');

class LoginController
{
    private $database;

    public function __construct()
    {
        $this -> database = new Database();
    }

    public function criarUsuario()
    {
        // Verificar se os campos foram enviados
        if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['criarUsuario'])) 
        {
            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);
            $termosAceitos = isset($_POST['AcceptT&C']);

            // Verificar se os campos estão preenchidos
            if (empty($nome) || empty($email) || empty($senha)) 
            {
                echo "Todos os campos são obrigatórios!";
                return;
            }

            // Verificar se os termos foram aceitos
            if (!$termosAceitos) 
            {
                echo "Você deve aceitar os Termos de Serviços!";
                return;
            }

            // Verificar se o email já está cadastrado
            if ($this -> database -> emailJaCadastrado($email)) 
            {
                echo "Este email já está cadastrado!";
                return;
            }

            if ( $this -> database -> inserir($nome, $email, $senha)) 
            {
                echo "Conta criada com sucesso!";
            } 
            else 
            {
                echo "Erro ao criar a conta!";
            }
        } 
        else 
        {
            echo "Dados incompletos!";
        }
    }
}

// =====================================================================================================================

function fazerLogin()
{
    if (isset($_POST['email'], $_POST['senha'], $_POST['loginUsuario'])) 
    {
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $senha = htmlspecialchars(trim($_POST['senha']));

        if (empty($email) || empty($senha)) 
        {
            echo "Todos os campos são obrigatórios!";
            return;
        }

        $stmt = $this->db->mysqli->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) 
        {
            $stmt->bind_result($id, $hashed_senha);
            $stmt->fetch();

            if (password_verify($senha, $hashed_senha)) 
            {
                echo "Login bem-sucedido!";
                // Aqui você pode iniciar a sessão do usuário
                session_start();
                $_SESSION['usuario_id'] = $id;
                // Redirecionar ou outras ações pós-login
            } 
            else 
            {
                echo "Senha incorreta!";
            }
        } 
        else 
        {
            echo "Email não encontrado!";
        }

        $stmt->close();
    } 
    else 
    {
        echo "Dados incompletos!";
    }
}

// =====================================================================================================================

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['criarUsuario'])) 
{
    $controller = new LoginController();
    $controller -> criarUsuario();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginUsuario'])) 
{
    $controller = new LoginController();
    $controller -> loginUsuario();
}

?>
