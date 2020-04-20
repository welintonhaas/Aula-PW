@extends('template.layout')

@section('conteudo')

    <div class="col-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Produtos</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Cadastro de um novo Produto
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('cadastra_prod')}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome do Produto" >
                        </div>

                        <div class="input-group mb-3">
                            <label for="id_tipo" class="d-none">Tipo</label>
                            <select name="id_tipo" id="id_tipo" class="form-control">
                                <option>* Selecione um Tipo...</option>
                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" step="0.01" required class="form-control" name="valor" placeholder="* Valor" >
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
