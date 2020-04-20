@extends('template.layout')

@section('conteudo')

    <div class="col-12 col-sm-6 mx-auto">

        <!-- Título -->
        <h1 class="display-4 mt-5 mb-3">Cadastrar Cliente</h1>

        <!-- Card -->
        <div class="card">
            <div class="card-header">
                Cadastro de um novo Cliente
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">

                    <!-- Formulário de Cadastro -->
                    <form method="POST" action="{{route('cadastra_cli')}}" >
                        @CSRF

                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="nome" placeholder="* Nome" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="endereco" placeholder="* Endereço" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="cep" placeholder="* Cep" >
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" required class="form-control" name="cidade" placeholder="* Cidade" >
                        </div>
                        <div class="input-group mb-3">
                            <label for="estado" class="d-none">Estado</label>
                            <select name="estado" id="estado" class="form-control">
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
                        <button class="btn btn-secondary float-right" type="submit">Cadastrar</button>
                    </form>

                    <!-- Campos Obrigatórios -->
                    <footer class="blockquote-footer float-left mt-1">Campos marcados com (*) são Obrigatórios</footer>

                </blockquote>
            </div>
        </div>
    </div>

@endsection
