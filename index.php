<?php
require_once 'conexao.php';

$telefone = '';
$emailM = '';

if (isset($_GET['idM'])) {
  $idM = $_GET['idM'];
  // Obtener la información del relato específico
  $sql = "SELECT * FROM medicalsystem WHERE idM = '$idM'";
  $result = $conexao->query($sql);
  $row = $result->fetch_assoc();
  $telefone = $row["telefone"];
  $emailM = $row["emailM"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem</title>
  <link rel="icon" href="./img/M4.png" type="image/x-icon">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script src='./js/bootstrap.bundle.js'></script>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">MedicalSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./login.php">
              <span data-feather="user" style="color: white;"></span>&nbsp;&nbsp; Iniciar sessão
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registro.php">
              <span data-feather="user-plus" style="color: white;"></span>&nbsp;&nbsp; Criar uma Conta
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="visitante/busca_resultado_V.php" method="GET">
          <div class="input-group">
            <input name="busca2" class="form-control me-2" type="search" placeholder="Faça uma pesquisa" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>
<body>
  <main style="margin-top: 0px;">
    <div id="alertaModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 5px;">
        <h1 style="text-align: center;">Alerta</h1>
        <p >Você deve declarar que aceita e está ciente dos termos e condições para continuar</p>
        <p style="text-center; margin-top: 20px"><a href="./termos.php">Ler termos e condições</a></p>

        <div style="display: flex; justify-content: center;">
          <button class="btn btn-lg btn-primary btn-block" onclick="aceptarAlerta()">Estou ciente e concordo com os termos e condições</button>
        </div>

      </div>
    </div>
    <div id="contenido" style="display: none;">
      <!-- Carrossel de itens -->
    <div id="carrossel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carrossel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carrossel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carrossel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/img6.png" class="d-block w-100" alt="foto1">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Medical System</h1>
              <p>O melhor site que você já visitou!</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/img6.png" class="d-block w-100" alt="balbblablab">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h1>Entre e tire todas as suas Dúvidas!</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/img6.png" class="d-block w-100" alt="balbblablab">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>1° do Mundo!</h1>
              <p>Você nunca viu um igual a este!</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </main>

  <footer class="container">
  <hr class="featurette-divider">
  <div class="text-center">
    <p class="text-center">
      &copy; 2022–<?php echo date('Y'); ?> | MedicalSystem | Nefi López - Gabriel Santana |
    </p>
    <p>
      <a href="tel:<?php echo $telefone; ?>">
        <span data-feather="phone" style="color: black;"></span>
      </a>
      <a href="mailto:<?php echo $emailM; ?>">
        <span data-feather="mail" style="color: black;"></span>
      </a>
    </p>
  </div>
</footer>
  <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./js/feather.mim.js"></script>
  <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="./js/menu.js"></script>
  <script type="text/javascript" src="./js/campo_pesquisa.js"></script>
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById("alertaModal").style.display = "block";
    }

    function aceptarAlerta() {
      document.getElementById("alertaModal").style.display = "none";
      document.getElementById("contenido").style.display = "block";
    }
  </script>
</body>
</html>
