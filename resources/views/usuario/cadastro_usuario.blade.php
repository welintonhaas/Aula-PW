@extends('template.layout')

@section('conteudo')

    <div class="col-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Usuário</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Cadastre-se para ter acesso a todas funcionalidades
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('cadastra_usu')}}" >

                        @csrf

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome" >
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="email" placeholder="* E-mail" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@ifsc.edu.br</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="login" placeholder="* Login" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" required class="form-control" name="senha" placeholder="* Senha" >
                        </div>
                        <button class="btn btn-secondary float-right" type="submit">Cadastrar</button>
                    </form>

                    <!-- Campos Obrigatórios -->
                    <footer class="blockquote-footer float-left mt-1">Campos marcados com (*) são Obrigatórios</footer>

                </blockquote>
            </div>
        </div>
    </div>

@endsection

