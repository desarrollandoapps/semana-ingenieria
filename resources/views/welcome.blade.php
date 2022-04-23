<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>VI Semana Internacional de la Ingeniería UCC</title>
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
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#programacion">Programación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cronograma">Cronograma</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#empresas">Empresas aliadas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#universidades">Universidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="fila-cuenta text-center">
                <div class="d-inline-block me-3">
                    <div class="cuenta" id="dias">00</div>
                    <div class="titulo-cuenta">DÍAS</div>
                </div>
                <div class="d-inline-block me-3">
                    <div class="cuenta" id="horas">00</div>
                    <div class="titulo-cuenta">HORAS</div>
                </div>
                <div class="d-inline-block me-3">
                    <div class="cuenta" id="minutos">00</div>
                    <div class="titulo-cuenta">MINUTOS</div>
                </div>
                <div class="d-inline-block">
                    <div class="cuenta" id="segundos">00</div>
                    <div class="titulo-cuenta">SEGUNDOS</div>
                </div>
            </div>
            <div class="text-center py-5">
                <h1 class="display-4 fw-normal fw-white">VI Semana Internacional de la Ingeniería</h1>
                <h3 class="fw-white">17 - 20 de mayo de 2022. Ibagué, Tolima, Colombia.</h3>
            </div>
        </div>

    </header>
    <main>
        <div class="container">
            <div class="pt-5 row">
                <div class="col">
                    <h2 class="fw-titulo-1">Presentación</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, aspernatur! Obcaecati fuga, eum
                        perferendis asperiores blanditiis nostrum repellendus voluptatibus fugiat dolores porro quam,
                        totam culpa impedit, ipsam numquam. Impedit, dolores?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur laborum ipsam, ut blanditiis
                        ab soluta excepturi recusandae a exercitationem voluptatibus, sit quae eum unde adipisci minima?
                        Deserunt molestias et in.</p>
                </div>
            </div>
            <div class="row" id="programacion">
                <h2 class="pt-5 fw-titulo-1">Programación</h2>
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-info lh-1 me-3">
                            <span class="d-block">17</span>
                            <span class="d-block fs-6">Mayo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-info lh-1 me-3">
                            <span class="d-block">18</span>
                            <span class="d-block fs-6">Mayo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-info lh-1 me-3">
                            <span class="d-block">19</span>
                            <span class="d-block fs-6">Mayo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-info lh-1">
                            <span class="d-block">20</span>
                            <span class="d-block fs-6">Mayo</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row" id="programacion-dia">
                <!-- Nav tabs --><ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="conferencias-tab" data-bs-toggle="tab" data-bs-target="#conferencias" type="button" role="tab" aria-controls="conferencias" aria-selected="true">Conferencias</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="talleres-tab" data-bs-toggle="tab" data-bs-target="#talleres" type="button" role="tab" aria-controls="talleres" aria-selected="false">Talleres</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ponencias-tab" data-bs-toggle="tab" data-bs-target="#ponencias" type="button" role="tab" aria-controls="ponencias" aria-selected="false">Ponencias</button>
                    </li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="conferencias" role="tabpanel" aria-labelledby="conferencias-tab">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>Horario</th>
                                    <th>Tema</th>
                                    <th>Conferencias</th>
                                    <th>País</th>
                                    <th>Lugar</th>
                                    <th>Enlace</th>
                                    <th>Inscripción</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane" id="talleres" role="tabpanel" aria-labelledby="talleres-tab">
                        2
                    </div>
                    <div class="tab-pane" id="ponencias" role="tabpanel" aria-labelledby="ponencias-tab">
                        3
                    </div>
                </div>  
            </div>
        </div>
    </main>

    <footer class="container-fluid pt-5 bg-azul-oscuro text-white">
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md"></div>
            <div class="col-md py-3">
                <h3 class="footer-heading">Síguenos</h3>
                <a href="https://www.facebook.com/uccibaguespinal/" target="_blank" class="link-light me-2"><i class="fab fa-facebook-square fa-3x"></i></a>
                <a href="https://twitter.com/uccibaguespinal" target="_blank" class="link-light me-2"><i class="fab fa-twitter-square fa-3x"></i></a>
                <a href="https://www.youtube.com/channel/UCwLDxE0BoaD7tHL8ygbmNFw" target="_blank" class="link-light me-2"><i class="fab fa-youtube-square fa-3x"></i></a>
                <a href="https://www.flickr.com/photos/ucooperativadecolombia" target="_blank" class="link-light me-2"><i class="fab fa-flickr fa-3x"></i></a>
                <a href="https://www.instagram.com/ucc_ibaguespinal/" target="_blank" class="link-light me-2"><i class="fab fa-instagram fa-3x"></i></a>
            </div>
        </div>
        <div class="row text-center bg-azul-claro py-3">
            <div class="container">
                <p>Universidad Cooperativa de Colombia - Campus Ibagué, Espinal</p>
                <p>Otra creación de 
                    <a href="http://desarrollandoapps.net" target="_blank" class="text-decoration-none link-light">
                        <img src="{{ asset('images/logo-da.svg') }}" alt="Logo desarrollandoApps" class="logo-da ms-3">
                </a>
                </p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 12, 2022 08:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("dias").innerHTML = days;
          document.getElementById("horas").innerHTML = hours;
          document.getElementById("minutos").innerHTML = minutes;
          document.getElementById("segundos").innerHTML = seconds;
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
    </script>
</body>

</html>