<?php

include('protect.php');

if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <link rel="stylesheet" href="./css/meus_relatos.css">
  <script src='./js/bootstrap.bundle.js'></script>

</head>

<header>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">
              <?php
              echo "<h3>" . $_SESSION["nome"] . "</h3>";
              ?>
              </a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Bucar" aria-label="Search ">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

          <li class="nav-item"><a class="nav-link" href="relato.php">
              <span data-feather="book" style="color: white;"></span>&nbsp;&nbsp;Relatar
              </a>
          </li>

          <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt nav_icon"></i>
              <span data-feather="log-out" style="color: white;"></span>&nbsp;&nbsp;Log-out</a>
          </li>
      </div>
    </div>
  </div>
</nav>

</header>
<div class="card " style="width: 18rem; margin-top: 8%; ">
  <div class="card-body">
    <h5 class="card-title">Fratura Do Pé</h5>
    <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados. </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Idade:</li>  <li class="list-group-item">Genero:</li>
    <li class="list-group-item">Data:</li>
    <li class="list-group-item">Peso:</li>
  </ul>
  <div class="card-body text-center">
    <a href="#" class="btn btn-primary">Visualizar</a>
  </div>
</div> 
  

<div class="card " style="width: 18rem; margin-top: -36%; margin-left: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Fratura Do Pé</h5>
    <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados. </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Idade:</li>  <li class="list-group-item">Genero:</li>
    <li class="list-group-item">Data:</li>
    <li class="list-group-item">Peso:</li>
  </ul>
  <div class="card-body">
    <a href="#" class="btn btn-primary">Visualizar</a>
  </div>
</div>

<div class="card " style="width: 18rem; margin-top: -36%; margin-left: 50rem;">
  <div class="card-body">
    <h5 class="card-title">Fratura Do Pé</h5>
    <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados. </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Idade:</li>  <li class="list-group-item">Genero:</li>
    <li class="list-group-item">Data:</li>
    <li class="list-group-item">Peso:</li>
  </ul>
  <div class="card-body">
    <a href="#" class="btn btn-primary">Visualizar</a>
  </div>
</div>

<script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/feather.mim.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>