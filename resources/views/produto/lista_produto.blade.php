@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Produtos</h1>
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

        @isset($produtos)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Açoes</th>
                </tr>
            </thead>

            <tbody>
                @foreach($produtos as $produto)
                <tr class="table-light">
                    <td>{{$produto->nome}}</td>
                    <td>{{$tipos->find($produto->id_tipo)->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('altera_prod',['id'=>$produto->id])}}"><i class="fas fa-pencil-alt"></i> Alterar</a>
                        <button class="btn btn-danger" onclick="exclui({{ $produto->id }})"><i class="fas fa-trash-alt"></i> Excluir</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('cad_produto')}}"><i class="fas fa-plus"></i> Cadastrar</a>
        @endisset
    </div>

    <script>
        function exclui(id) {
            if (confirm('Deseja realmente excluir o produto ?')) {
                location.href ='/produto/excluir/' + id;
            }else{
                return true;
            }
        }
        $(".alert-success").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>

@endsection
