@extends('template/layout')

@section('conteudo')
    <div class="container">

        <h1 class="display-4 mt-5 mb-3">Lista de Produtos da Venda # {{ $venda->id }}</h1>
        @isset($venda)
        <table class="table table-bordered ">

            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id Venda</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($venda->produtos as $p)
                <tr class="table-light">
                    <td>{{ $p->pivot->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->pivot->quantidade }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->pivot->subtotal }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td><button class="btn btn-danger" onclick="exclui( {{ $venda->id }},{{ $p->pivot->id }} )"><i class="fas fa-trash-alt"></i> Excluir</button></td>
                </tr>
                @endforeach
                <tr>
                    <td>Total</td>
                    <td>{{ $venda->valor }}</td>
                </tr>
            </tbody>
        </table>

        @endisset
    </div>


    <script>
        function exclui(id,id_produto) {
            if (confirm('Deseja realmente excluir o produto da venda ?')) {
                location.href ='/venda/'+id+'/excluir/item/' + id_produto;
            }else{
                return true;
            }
        }
        $(".alert-success").fadeTo(1500, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
    </script>


@endsection
