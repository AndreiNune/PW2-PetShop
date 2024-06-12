<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa do Pet - Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/pet.css') }}">
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

    <div class="container-fluid">
        <div class="containerr">
            <div class="form-container">
                <div class="imagem">
                    <img src="{{ asset('imagens/cao.png') }}" alt="Minha Imagem">
                </div>
                <div class="form">
                    <div class="form-header">
                        <h1>Editar Pet</h1>
                    </div>
                    <form method="POST" action="/atualizarp/{{$pet->id}}">
                        @csrf
                        <div class="input-group">
                            <div class="input-box">
                                <label for="first_name">Nome do pet:</label>
                                <input type="text" id="nome" name="nome" value="{{$pet->nome}}" placeholder="Ex: Loro" required>
                            </div>
                            <div class="input-box">
                                <label for="responsible">Espécie:</label>
                                <input type="text" id="espec" name="espec" value="{{$pet->especie}}" placeholder="Ex: Pássaro" required>
                            </div>
                            <div class="input-box">
                                <label for="responsible">Gênero:</label>
                                <input type="text" id="genero" name="genero" value="{{$pet->genero}}" placeholder="Ex: Masculino" required>
                            </div>
                            <div class="input-box">
                                <label for="responsible">Raça:</label>
                                <input type="text" id="raca" name="raca" value="{{$pet->raca}}" placeholder="Ex: Calopsita" required>
                            </div>
                            <div class="input-box">
                                <label for="responsible">Responsável:</label>
                                <input type="hidden" id="responsible" name="responsible" placeholder="Ex: Antonio" required>
                            </div>
                        </div> 
                        <div class="input-group">
                            <div class="input-box full-width">
                                <label for="textarea1" class="form-label">Doença do Pet:</label>
                                <textarea id="textarea1" name="doenca" rows="3" placeholder="Descreva a doença" required>{{$pet->doenca}}</textarea>
                            </div>
                        </div>
                        <div class="continue-button">
                            <button type="submit">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Pet Shop. Todos os direitos reservados.</p>
    </footer>
</body>
</html>