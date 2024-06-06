<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Xhopii - Home</title>
    <!-- Incluir o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <header>
        <section id="cabecalho-logo">
            <img src="../img/logo.png">
            <h1>Xhopii</h1>
        </section>
        <section id="cabecalho-logout">
            <a href="login.php">Sair</a>
        </section>
    </header>

    <nav class="menu-horizontal">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="cadastroCliente.php">Cadastro Cliente</a></li>
            <li><a href="cadastroFuncionarios.php">Cadastro Funcionário</a></li>
            <li><a href="cadastroProdutos">Cadastro Produto</a></li>
            <li><a href="verCliente.php">Ver Clientes</a></li>
            <li><a href="verFuncionario.php">Ver Funcionários</a></li>
            <li><a href="verProduto.php">Ver Produtos</a></li>
        </ul>
    </nav>

    <section class="conteudo-home">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/carousel-1.jpg" class="d-block w-100" alt="Categoria 1">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel-2.jpg" class="d-block w-100" alt="Categoria 2">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel-3.jpg" class="d-block w-100" alt="Categoria 3">
                </div>
                <div class="carousel-item">
                    <img src="../img/carousel-4.jpg" class="d-block w-100" alt="Categoria 4">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

        <div class="confira">
            <img src="../img/home-promocao.png">
        </div>

        <div class="descobertas">
            <p> DESCOBERTAS DO DIA</p>
        </div>

        <div class="h">
            <hr>
        </div>

        <div class="tabela">

            <div  class="div-1">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento1">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento1-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento1-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div  class="div-2">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento2">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento2-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento2-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div  class="div-3">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento3">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento3-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento3-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
           
            <div  class="div-4">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento4">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento4-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento4-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div  class="div-5">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento5">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento5-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento5-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div  class="div-6">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento6">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento6-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento6-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div  class="div-7">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento7">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento7-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento7-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div  class="div-8">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento8">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento8-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento8-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>

            <div  class="div-9">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento9">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento9-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento9-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div  class="div-10">
            <a href="visualizar_um_unico_produto.php">
                <div id="box"class="detalhamento10">
                    <img src="../img/produto1.png">
                    <p> Camisa Desenvolvedor Front-End CSS</p>
                    <div class="fonts">
                        <div class="detalhamento10-font1">
                            <p> R$ 59,90 </p>
                        </div>
                        <div class="detalhamento10-font2">
                            <p> 171 disponíveis </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </section>
 
   
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


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
</body>

</html>