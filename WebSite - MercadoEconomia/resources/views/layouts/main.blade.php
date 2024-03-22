<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="module" src="/js/script.js"></script>
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
<body>

    @yield('header')
    <header>
        <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                
                <a class="navbar-brand font-weight-bold" style="border-right: 2px solid white; padding-right: 15px;" href="/">Mercado Economia</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link menu-cor" aria-current="page" href="/fornecedores">Fornecedores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link menu-cor" aria-current="page" href="/funcionarios">Funcionarios</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link menu-cor" aria-current="page" href="/estoque">Estoque</a>
                    </li>
                </ul>
                </div>

            </div>
        </nav>
    </header>

    <!--CONTEUDO-->

    @yield('footer')
    <footer class="bg-dark text-light text-center py-4 fixed-bottom">
    <p class="m-0">&copy; 2023 - Alunos da Fatec de Presidente Prudente </p>

    <!--BOOTSTRAP-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>