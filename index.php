<!doctype html>
<html lang="en">

<head>
  <title>Translate SolucionesTechMx</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <script
    src="https://code.jquery.com/jquery-3.7.0.js"
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Soluciones Tech MX by Alexis Tech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  </header>
  <main class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="container rounded border shadow p-3 mb-5 bg-body align-items-center">
        <div class="row align-items-center">
            <div class="col-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="textotraducir" style="height: 10rem"></textarea>
                    <label for="textotraducir">Texto a traducir:</label>
                </div>
            </div>
            <input type="hidden" id="idiomaOrigen" value="es">
            <input type="hidden" id="idiomaDestino" value="en">
            <div class="col-2 ">
                <div class="text-center d-flex align-items-center justify-content-between pb-3">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex align-items-center">
                            <div class="d-inline-block bandera"><img id="paisOrigen" src="assets/banderas/mexico.png" alt="Bandera de México" data-idioma="es"></div>
                            <button class="btn btn-info ms-2" onclick="traducir();">
                                Traducir
                            </button>
                            <div class="d-inline-block bandera ms-2"><img id="paisDestino" src="assets/banderas/usa.png" alt="Bandera de Estados Unidos" data-idioma="en"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center ">
                    <button class="btn btn-primary" onclick="intercambiarBanderas();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-5">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="textotraducido" style="height: 10rem"></textarea>
                    <br>
                    <label for="texttraducido">Texto traducido:</label>
                </div>
            </div>
        </div>
    </div>
</main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>