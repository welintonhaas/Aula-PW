@extends('template.layout')

@section('conteudo')

    <div class="col-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Tipos</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Cadastro de um novo Tipo
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('cadastra_tipo')}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome do Tipo" >
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="descricao" placeholder="* Descrição" >
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
