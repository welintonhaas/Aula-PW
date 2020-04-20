@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Tipo</h1>
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

        @isset($tipos)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome do Tipo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($tipos as $tipo)
                <tr class="table-light">
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->nome}}</td>
                    <td>{{$tipo->descricao}}</td>
                    <td><a class="btn btn-primary" href="{{route('altera_tipo',['id'=>$tipo->id])}}"><i class="fas fa-pencil-alt"></i> Alterar</a>
                        <button class="btn btn-danger" onclick="exclui({{ $tipo->id }})"><i class="fas fa-trash-alt"></i> Excluir</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" href="{{route('cad_tipo')}}"><i class="fas fa-plus"></i> Cadastrar</a>
        @endisset
    </div>

    <script>
        function exclui(id) {
            if (confirm('Deseja realmente excluir o tipo ?')) {
                location.href ='/tipo/excluir/' + id;
            }else{
                return true;
            }
        }
        $(".alert-success").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>

@endsection
