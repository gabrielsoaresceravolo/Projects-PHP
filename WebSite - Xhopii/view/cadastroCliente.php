<?php
    // include("classe/conexao.php");

    // $msg = false;

    // if(isset($_FILES['cliente'])){

    //     $extensao = (substr($_FILES['cliente']['name'],-4));
    //     $novo_nome = md5(time()) . $extensao;
    //     $diretorio = "upload/";

    //     move_uploaded_file($_FILES['cliente']['tmp_name'], $diretorio.$novo_nome);

    //     $sql_code = "INSERT INTO cliente (arquivo) VALUES ('$novo_nome')";
        
    //     if($mysqli->query($sql_code))
    //         $msg = "Arquivo enviado com sucesso";
    //     else 
    //         $msg = "Falha ao enviar arquivo.";

    // }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastroCliente.css">
    <title>Xhopii</title>
</head>
<body>
<header>
        <div class="cabecalho">
            <div class="items">
                <img src="../img/logo.png">
                <h1>Xhopii</h1>
                
                <a href="#">
                   Sair
                </a>
            </div>
        </div>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro de Clilentes</a></li>
            <li><a href="cadastroFuncionarios.php">Cadastro de Funcionário</a></li>
            <li><a href="cadastrarProduto.php">Cadastro de Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <main>
        <div class="formulario">
        
            <form action="../processamento/processamento.php" method="post" enctype="multipart/form-data">
                
                
                <label id="cadastro">Cadastrar Cliente</label>
                <input name="nome" type="text" id="nome" placeholder="Nome">

                <input name="Sobrenome" type="text" id="sob" placeholder="Sobrenome">

                <input name="CPF" type="number" id="cpf" placeholder="CPF">

                <input name="data" type="date" id="data" placeholder="Data de Nascimento">

                <input name="Telefone" type="number" id="tel" placeholder="Telefone">

                <input name="Email" type="email" id="email" placeholder="Email">

                <input name="Senha" type="password" id="senha" placeholder="Senha">

                <label> Selecionar foto de perfil: </label>

<?php
// if($msg != false) echo "<p> $msg </p>;"
?>


                <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Escolher arquivo
                </label>
                <input id="file-upload" type="file" name="arquivo">
                

                <input value="CADASTRAR" type="submit"  id="submit">
                
            </form>
        </div>
    </main>
    
    <footer>
        <div class="foo">
            <div class="rodape">
            <div class="texto1">
                <h3>Atendimento ao cliente</h3>
                <p>Central de ajuda</p>
                <p>Como Comprar</p>
                <p>Métodos de Pagamento</p>
                <p>Garantia Xhopii</p>
                <p>Devolução e Reembolso</p>
                <p>Fale Conosoco</p>
                <p>Ouridoria</p>
            </div>

            <div class="texto2">
                <h3>Sobre a xhopii</h3>
                <p>Sobre Nós</p>
                <p>Políticas Xhopii</p>
                <p>Política de Privacidade</p>
                <p>Programa de Aliados da Xhopii</p>
                <p>Seja um Entregador Xhopii</p>
                <p>Ofertas Relâmpago</p>
                <p>Xhopii Blog</p>
                <p>Impresa</p>
            </div>

            <div class="pagamento">
                <h3>Pagamento</h3>
                <div id="tipo">
                    <img src="../img/pix.png">
                    <img src="../img/boleto.png">
                    <img src="../img/american.png">
                    <br>
                    <img src="../img/visa.png">
                    <img src="../img/master.png">
                    <img src="../img/hiper.png">
                    <br>
                    <img src="../img/elo.png">
                
                </div>
            </div>

            <div class="correct">
                <h3>Siga-nos</h3>
                    <div class="siga">
                        <div id="redes"> 
                            <img src="../img/instagram.png">
                            <img src="../img/twitter.png">
                            <img src="../img/face.png">
                            <img src="../img/yt.png">
                            <img src="../img/in.png">

                        </div> 
                        <div>
                            <p>Instagram</p>
                            <p>Twitter</p>
                            <p>Facebook</p>
                            <p>YouTube</p>
                            <p>Linkedin</p> 
                        </div>  
                </div>
            </div>

            <div class="texto3">
                <h3>Atendimento ao Cliente</h3>
                <img src="../img/qr.png">
                <div id="apps">
                <img src="../img/apple.png">
                <img src="../img/play.png">
                </div>
            </div>
            </div>
               <div class="direitos">
                <hr> 
                <p>© 2023 Xhopii. Todos os direitos acadêmicos reservados</p>
               </div>
               
           
        </div>
        


    </footer>

</body>
</html>