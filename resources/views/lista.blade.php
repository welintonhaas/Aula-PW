@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Clientes</h1>
        @isset($clientes)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $cliente)
                <tr class="table-light">
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->endereco}}</td>
                    <td>{{$cliente->cep}}</td>
                    <td>{{$cliente->cidade}}</td>
                    <td>{{$cliente->estado}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
        @endisset
    </div>

@endsection
