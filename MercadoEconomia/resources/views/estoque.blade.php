@extends('layouts.main')
@section('title','Estoque')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">WS.System</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Functions
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Clients</a></li>
                        <li><a class="dropdown-item" href="#">Employees</a></li>
                        <li><a class="dropdown-item" href="#">Products</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!--============================-->

<main class="container">

    <h3 class="mt-5">Customers</h3>

    <hr>

    <button type="button" class="btn btn-outline-success mt-1 mb-4" data-bs-toggle="modal"
        data-bs-target="#inserirModal">
        New Register
    </button>

    <table class="table table-striped table-hover mt-3" id="tabela">
        <thead class="table-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</main>

<!--===================-->
<!--Inserir um registro-->
<!--===================-->

<div class="modal fade" id="inserirModal" tabindex="-1" aria-labelledby="inserirModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="inserirModalLabel">New Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label for="inserir-nome" class="form-label">Client name:</label>
                        <input type="text" id="inserir-nome" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inserir-email" class="form-label">Client email:</label>
                        <input type="text" id="inserir-email" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button id="btnInserirCliente" type="button" class="btn btn-success" data-bs-dismiss="modal">
                    Save
                </button>

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>

    </div>
</div>

<!--====================-->
<!--Sucesso ao registrar-->
<!--====================-->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastInserirSucesso" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <span class="material-symbols-outlined">check_circle</span>
            <strong class="me-auto">Response</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <p>Successfully registered!</p>
        </div>
    </div>
</div>

<!--=================-->
<!--Erro ao registrar-->
<!--=================-->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastInserirErro" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <span class="material-symbols-outlined">
                error
            </span>
            <strong class="me-auto">Response</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <p>Error when entering new Registration!</p>
        </div>
    </div>
</div>

<!--=====================-->
<!--Consultar um Registro-->
<!--=====================-->

<div class="modal fade" id="consultarModal" tabindex="-1" aria-labelledby="consultarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="consultarModalLabel">Consult Registry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p>Client name:</p>
                        <p id="consultar-nome">name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Client email:</p>
                        <p id="consultar-email">Email</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--===================-->
<!--Alterar um Registro-->
<!--===================-->

<div class="modal fade" id="alterarModal" tabindex="-1" aria-labelledby="alterarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="alterarModalLabel">Change registry</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label for="inserir-nome" class="form-label">Client name:</label>
                        <input type="text" id="inserir-nome" class="form-control" />
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inserir-email" class="form-label">Client email:</label>
                        <input type="text" id="inserir-email" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--===================-->
<!--Excluir um Registro-->
<!--===================-->

<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="excluirModalLabel">Delete Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <p>Client name:</p>
                        <p id="consultar-nome">Name</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Client email:</p>
                        <p id="consultar-email">Email</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <p class="text-danger">Do you really want to delete this Register?</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

@endsection