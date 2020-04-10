@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Vendas</h1>
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

        @isset($vendas)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Açoes</th>
                </tr>
            </thead>

            <tbody>
                @foreach($vendas as $venda)
                <tr class="table-light">
                    <td>{{$clientes->find($venda->id_cliente)->nome}}</td>
                    <td>{{$venda->descricao}}</td>
                    <td>{{$venda->valor}}</td>
                    <td><button class="btn btn-danger" onclick="exclui({{ $venda->id }})"><i class="fas fa-trash-alt"></i> Excluir</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('cad_vend')}}"><i class="fas fa-plus"></i> Cadastrar</a>
        @endisset
    </div>

    <script>
        function exclui(id) {
            if (confirm('Deseja realmente excluir a venda ?')) {
                location.href ='/venda/excluir/' + id;
            }else{
                return true;
            }
        }
        $(".alert-success").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>

@endsection
