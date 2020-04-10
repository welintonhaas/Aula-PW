@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Clientes</h1>
        @isset($msg)

            @if ($msg[0])
                <div class="alert alert-success" role="alert">
                    {{ $msg['msg'] }}
                </div>
            @else
                <div class="alert alert-danger" role="alert">
                    {{ $msg['msg'] }}
                </div>
            @endif
        @endisset

        @isset($clientes)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Açoes</th>
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
                    <td><a class="btn btn-primary" href="{{route('altera_cli',['id'=>$cliente->id])}}"><i class="fas fa-pencil-alt"></i> Alterar</a>
                        <button class="btn btn-danger" onclick="exclui({{ $cliente->id }})"><i class="fas fa-trash-alt"></i> Excluir</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('cad_cliente')}}"><i class="fas fa-plus"></i> Cadastrar</a>
        @endisset
    </div>

    <script>
        function exclui(id) {
            if (confirm('Deseja realmente excluir o cliente ?')) {
                location.href ='/cliente/excluir/' + id;
            }else{
                return true;
            }
        }
        $(".alert-success").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>

@endsection
