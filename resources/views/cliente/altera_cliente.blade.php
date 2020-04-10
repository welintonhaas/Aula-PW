@extends('template.layout')

@section('conteudo')

    <div class="col-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Alterar Cliente</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Alterar Cliente
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('alterar_cli',$cli->id)}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome" value="{{ $cli->nome }}" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="endereco" placeholder="* Endereço" value="{{ $cli->endereco }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="cep" placeholder="* Cep" value="{{ $cli->cep }}">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="cidade" placeholder="* Cidade" value="{{ $cli->cidade }}" >
                        </div>
                        <div class="input-group mb-3">
                            <label for="estado" class="d-none">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                @isset($cli->id)
                                    <option value="{{ $cli->estado }}">{{ $cli->estado }}</option>
                                @endisset
                                <option>Selecione um Estado...</option>
                                <option value="Acre">Acre (AC)</option>
                                <option value="Alagoas">Alagoas (AL)</option>
                                <option value="Amapá">Amapá (AP)</option>
                                <option value="Amazonas">Amazonas (AM)</option>
                                <option value="Bahia">Bahia (BA)</option>
                                <option value="Ceará">Ceará (CE)</option>
                                <option value="Distrito Federal">Distrito Federal (DF)</option>
                                <option value="Espírito Santo">Espírito Santo (ES)</option>
                                <option value="Goiás">Goiás (GO)</option>
                                <option value="Maranhão">Maranhão (MA)</option>
                                <option value="Mato Grosso">Mato Grosso (MT)</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul (MS)</option>
                                <option value="Minas Gerais">Minas Gerais (MG)</option>
                                <option value="Pará">Pará (PA)</option>
                                <option value="Paraíba">Paraíba (PB)</option>
                                <option value="Paraná">Paraná (PR)</option>
                                <option value="Pernambuco">Pernambuco (PE)</option>
                                <option value="Piauí">Piauí (PI)</option>
                                <option value="Rio de Janeiro">Rio de Janeiro (RJ)</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte (RN)</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul (RS)</option>
                                <option value="Rondônia">Rondônia (RO)</option>
                                <option value="Roraima">Roraima (RR)</option>
                                <option value="Santa Catarina">Santa Catarina (SC)</option>
                                <option value="São Paulo">São Paulo (SP)</option>
                                <option value="Sergipe">Sergipe (SE)</option>
                                <option value="Tocantins">Tocantins (TO)</option>
                            </select>
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
