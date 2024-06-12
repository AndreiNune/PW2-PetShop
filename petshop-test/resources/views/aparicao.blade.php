<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa do Pet - Consulta de Pets e Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/aparicao.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="welcome.blade.php">Casa do Pet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrarc">Cadastrar Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastrarp">Cadastrar Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aparicao">Consultar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h1 class="text-center mb-4">Consulta de Pets e Clientes</h1>
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-primary mx-2" id="show-pets">Mostrar Pets</button>
            <button class="btn btn-primary mx-2" id="show-clients">Mostrar Clientes</button>
        </div>
        <div class="table-background">
                        <!-- Aqui serão inseridos os registros de pets -->
                <div class="table-responsive" id="pets-container" style="display: none;">
                <h2 class="mb-3">Pets</h2>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome do Pet</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Espécie</th>
                            <th scope="col">Raça</th>
                            <th scope="col">Doença</th>
                            <th scope="col">Editar/Excluir</th>
                        </tr>
                    </thead>
                    <tbody id="pets-table">
                    @if (count($pet) > 0)
                    @foreach ($pet as $pets)
                        <tr>
                            <th>{{ $pets->id }}</th>
                            <th>{{ $pets->nome }}</th>
                            <th>{{ $pets->especie }}</th>
                            <th>{{ $pets->genero }}</th>
                            <th>{{ $pets->raca }}</th>
                            <th>{{ $pets->doenca }}</th>
                            <th>
                                <a href="/editarp/{{ $pets->id }}" class="btn btn-primary">Editar</a>
                                <a href="/excluirp/{{ $pets->id }}" class="btn btn-danger">Excluir</a>
                        </th>
                            
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>Sem registros!</th>
                    </tr>
                @endif
                    </tbody>
                </table>
            </div>
                        <!-- Aqui serão inseridos os registros de clientes -->
            <div class="table-responsive" id="clients-container" style="display: none;">
                <h2 class="mb-3">Clientes</h2>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Editar/Excluir</th>
                        </tr>
                    </thead>
                    <tbody id="clients-table">
                    <!-- count(): Argument #1 ($value) must be of type Countable|array, null given -->
                    @if (count($cliente) > 0)
                    @foreach ($cliente as $cli)
                        <tr>
                            <th>{{ $cli->id }}</th>
                            <th>{{ $cli->nome }}</th>
                            <th>{{ $cli->sobrenome }}</th>
                            <th>{{ $cli->email }}</th>
                            <th>{{ $cli->telefone }}</th>
                            <th><a href="/editarc/{{ $cli->id }}" class="btn btn-primary">Editar</a>
                                <a href="/excluir/{{ $cli->id }}" class="btn btn-danger">Excluir</a>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>Sem registros!</th>
                    </tr>
                @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Pet Shop. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('js/consulta.js') }}"></script>
</body>
</html>
