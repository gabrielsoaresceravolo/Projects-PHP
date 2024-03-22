<?php

// DotEnv

require __DIR__ . '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// ===========================================================


// URL da API
$url = $_ENV['API-FATEC-PROFESSORES']; 

// Requisição GET da API
$respostaAPI = file_get_contents($url);

if ($respostaAPI) 
{
    // Converte a resposta JSON em um array
    $data = json_decode($respostaAPI, true);

    // Verifica se o JSON foi decodificado corretamente
    if ($data)
    {
        // Configurações do banco de dados
        $servidor = $_ENV['servidor'];
        $username = $_ENV['username'];
        $password = $_ENV['password'];
        $dbname = $_ENV['dbname'];

        try 
        {
            // Cria a conexão com o banco de dados
            $conexao = new PDO("mysql:host = $servidor ; dbname = $dbname", $username, $password);

            // Modo de erro do PDO
            $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Dados obtidos da API
            foreach ($data as $item) 
            {
                $nome = $item['nome'];
                $email = $item['email'];

                // Insere os dados na tabela do banco de dados
                $stmt = $conexao -> prepare("INSERT INTO professores (nome, email) VALUES (:nome, :email)");

                // Prepara uma consulta
                $stmt -> bindParam(':nome', $nome);
                $stmt -> bindParam(':email', $email);

                // Executa a consulta
                $stmt -> execute();

                echo "Dados inseridos com sucesso!";
            }
        } 
        catch (PDOException $e) 
        {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
        }
        
        // Fecha a conexão
        $conexao = null;

    } 
    
    else 
    {
        echo "Erro ao decodificar a resposta da API!";
    }
} 

else 
{
    echo "Erro ao fazer a requisição para a API.";
}

?>
