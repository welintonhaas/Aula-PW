<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Icones -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <title>Lista de Clientes</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"  crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-sm bg-light navbar-light w-100">
                    <a class="navbar-brand text-success" href="#"> <span class="h5">PW </span><i class="fas fa-terminal "></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ @route('cad_usuario') }}"><i class="fas fa-user-plus  text-success"></i> Usuários</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link">|</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ @route('listar_cli') }}"><i class="fas fa-user-astronaut  text-success"></i> Clientes</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link">|</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ @route('listar_vend') }}"><i class="fas fa-funnel-dollar text-success"></i> Vendas</a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>
        <div class="container">
            @yield('conteudo')
        </div>

        <!-- Optional JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

