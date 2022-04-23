<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/conferencista.css') }}">
    <title>VI Semana Internacional de la Ingeniería UCC :: Conferencista</title>
</head>
<body>
    <header>
        <div class="banner" id="banner">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="me-5" id="siteIcon">
                                <a class="ms-siteicon-a" href="#">
                                    <img src="{{ asset('images/logo-ucc.png') }}" alt="Logo UCC" id="logo" class="">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">Programación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">Cronograma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">Empresas aliadas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welcome') }}">Universidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="text-center">
                <p id="cuenta"></p>
                <h1 class="display-4 fw-normal fw-white">VI Semana Internacional de la Ingeniería</h1>
                <h3 class="fw-white">17 - 20 de mayo de 2022. Ibagué, Tolima, Colombia</h3>
            </div>
        </div>

    </header>
</body>
</html>