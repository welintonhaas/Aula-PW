@extends('template.layout')

@section('conteudo')

    <div class="col-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Vendas</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Cadastro de um nova Venda
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('cadastra_vend')}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <label for="id_cliente" class="d-none">Cliente</label>
                            <select name="id_cliente" id="id_cliente" class="form-control">
                                <option>* Selecione um Cliente...</option>
                                @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="descricao" placeholder="* Descrição" >
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
