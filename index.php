<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MedicalSystem</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script src='./js/bootstrap.bundle.js'></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div id="Menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./index.php">Principal</a></li>
                <li class="nav-item"><a class="nav-link" href="./login.php">Entrar</a></li>
                <li class="nav-item"><a class="nav-link" href="./registro.php">Registrar-se</a></li>
            </ul>
        </div>

        </div>
        <nav class="navbar"style="margin-left: 29px;">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </nav>
</header>

<body>

  <main style="margin-top: 70px;">
    <!-- Carrossel de itens -->
    <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/img2.jpg" class="d-block w-100" alt="balbblablab">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">

                        <h1>Medical System</h1>
                        <p>bla bla bla</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/img2.jpg" class="d-block w-100" alt="balbblablab">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Favorecidos</h1>
                        <p>Cadastre a fonte de seus recebimentos e pagamentos</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/img3.jpg" class="d-block w-100" alt="balbblablab">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Contas a Pagar</h1>
                        <p>Controle os seus pagamentos</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Próximo</span>
        </button>
    </div>
    
</body>

</html>