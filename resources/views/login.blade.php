@extends('template.layout')

@section('conteudo')
    <div class="col-6 mx-auto">
        <h1 class="display-4 mt-5 mb-3">Login</h1>
        <div class="card">
            <div class="card-header">
                Faça login para iniciar uma nova sessão
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('logar')}}" >

                        @csrf

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="login" placeholder="* Login" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" required class="form-control" name="senha" placeholder="* Senha" >
                        </div>
                        <button class="btn btn-success" type="submit">Logar</button>
                        <a class="btn btn-primary float-right" href="{{ route('cad_usuario') }}">Novo Cadastro</a>
                    </form>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
