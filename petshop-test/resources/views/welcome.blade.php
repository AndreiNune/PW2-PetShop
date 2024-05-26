<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa do Pet - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide mt-5 pt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('imagens/1.png') }}" class="d-block w-100" alt="Descrição da Imagem">

                </div>
                <div class="carousel-item">
                <img src="{{ asset('imagens/2.png') }}" class="d-block w-100" alt="Descrição da Imagem">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('imagens/3.png') }}" class="d-block w-100" alt="Descrição da Imagem">
                </div>
<<<<<<< HEAD

                <div class="continue-button">
                    <button>Continuar</button>
                </div>
            </form>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>

    <div class="clinic-section">
        <div class="container mt-5">
            <h2>Sobre Nossa Clínica</h2>
            <p>Bem-vindo à nossa clínica de pet shop! Nós oferecemos os melhores cuidados para o seu animal de estimação. Nossa equipe de veterinários experientes está aqui para garantir a saúde e o bem-estar do seu pet.</p>
        </div>
    </div>

    <div class="contact-form-section">
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>Fale Conosco</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Seu Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem:</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Sua Mensagem"></textarea>
                        </div>
                        <button type="submit" class="continue-button">Enviar</button>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                <img src="{{ asset('imagens/4.png') }}" class="img-fluid" alt="Descrição da Imagem">
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Pet Shop. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
