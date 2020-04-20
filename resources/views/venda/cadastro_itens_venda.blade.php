@extends('template.layout')

@section('conteudo')

    <div class="col-12 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Itens na Venda {{ $venda->id }}</h1>

        <!-- Card -->
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    Cadastro de novo Item
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">

                        <!-- Formulário de Cadastro -->
                        <form method="POST" action="{{route('cadastrar_item_vend', ['id'=>$venda->id])}}" >
                            @CSRF

                            <div class="input-group mb-3">
                                <label for="id_produto" class="d-none">Tipo</label>
                                <select name="id_produto" id="id_produto" class="form-control">
                                    <option>* Selecione um Produto...</option>
                                    @foreach($produtos as $produto)
                                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" step="0.01" min="1" required class="form-control" name="quantidade" placeholder="* Quantidade" >
                            </div>

                            <button class="btn btn-secondary float-right" type="submit">Cadastrar</button>
                        </form>

                        <!-- Campos Obrigatórios -->
                        <footer class="blockquote-footer float-left mt-1">Campos marcados com (*) são Obrigatórios</footer>

                    </blockquote>
                </div>
            </div>
        </div>

        <h2 class=" mt-5 mb-3">Lista de Produtos da Venda # {{ $venda->id }}</h2>
        @isset($venda)
            <table class="table table-striped ">

                <thead class="thead-dark">
                <tr>
                    <th scope="col"># Item</th>
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
                    <tr>
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
        <a class="btn btn-success" href="{{route('listar_vend')}}">Concluir Venda</a>
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
