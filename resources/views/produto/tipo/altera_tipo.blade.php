@extends('template.layout')

@section('conteudo')

    <div class="col-12 col-sm-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Alterar Tipo</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Alterar Tipo
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('alterar_tipo',$tipo->id)}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome" value="{{ $tipo->nome }}" >
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="descricao" placeholder="* Descrição" value="{{ $tipo->descricao }}">
                        </div>

                        <button class="btn btn-secondary float-right" type="submit">Alterar</button>
                    </form>

                    <!-- Campos Obrigatórios -->
                    <footer class="blockquote-footer float-left mt-1">Campos marcados com (*) são Obrigatórios</footer>

                </blockquote>
            </div>
        </div>
    </div>

@endsection
