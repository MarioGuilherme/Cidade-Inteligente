<?
    session_start();
    empty($_SESSION) ? header("Location: /") : "";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Projeto Fatec
    </title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/MaterialDesign/css/materialdesignicons.css">
    <link rel="stylesheet" href="public/fonts/font.css">
    <link rel="stylesheet" href="public/css/conteudo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navCity">
        <h4 class="navbar-brand">
            <i class="mdi mdi-city-variant-outline"></i>
            Cidade Inteligente
        </h4>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        Projetos
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        Categorias
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        Fatec
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                        Sobre
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="jumbotron rounded-0">
        <h1 class="display-4">
            Projeto Cidade Inteligente Fatec 2021
        </h1>
        <p class="lead">
            O projeto consiste na criação de um prototipo, representando uma cidade inteligente.
        </p>
        <hr class="my-4">
        <p>
            Desenvolvido na Fatec de Lins
        </p>
    </div>

    <main>
        <div class="container-fluid mt-4">
            <div class="galeria">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h2>
                            Galeria de Projetos
                        </h2>
                        <hr class="my-4">
                        <p>
                            Abaixo contêm projetos realizados por alunos da Fatec Lins - Prof. Antonio Seabra
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="public/img/casa1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-card btn-block">
                                    Ver Mais
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="public/img/casa1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-card btn-block">
                                    Ver Mais
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top" src="public/img/casa1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Card title
                                </h5>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                                <a href="#" class="btn btn-card btn-block">
                                    Ver Mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="public/assets/jQuery/jquery-3.6.0.min"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min"></script>
    <script src="public/assets/sweetalert2/sweetalert2.all.min"></script>
</body>

</html>