@extends('template.layout')

@section('conteudo')

    <div class="col-12 col-sm-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Alterar Produto</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Alterar Produto
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('alterar_prod',$produto->id)}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome do Produto"  value="{{$produto->nome}}">
                        </div>

                        <div class="input-group mb-3">
                            <label for="id_tipo" class="d-none">Tipo</label>
                            <select name="id_tipo" id="id_tipo" class="form-control">

                                @foreach($tipos as $tipo)
                                    <option value="{{ $tipo->id }}"
                                        @if ($produto->id_tipo == $tipo->id)
                                        selected="selected"
                                        @endif
                                    >
                                        {{ $tipo->nome }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <input type="number" step="0.01" required class="form-control" name="valor" placeholder="* Valor" value="{{$produto->valor}}" >
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
