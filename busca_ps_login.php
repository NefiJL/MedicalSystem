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
      <input class="form-control me-2" type="search" placeholder="Search experience" aria-label="Search ">
      <button class="btn btn-outline-success" type="submit">Search</button>
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

          <li class="nav-item"><a class="nav-link">
              <span data-feather="book-open" style="color: white;"></span>&nbsp;&nbsp;Meus Relatos
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

<body class="color">
<div class="row coluna">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Título especial</h5>
        <p class="card-text">Quando o osso está muito fora do lugar e não pode ser corrigido 
          ou mantido na posição correta com o uso de gesso, é necessário fazer a cirurgia.
          Dependendo da fratura, há várias opções para manter os ossos na posição correta até a consolidação:
          gesso; pinos metálicos (normalmente de aço inoxidável ou titânio); </p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Título especial</h5>
        <p class="card-text">Quando o osso está muito fora do lugar e não pode ser corrigido 
          ou mantido na posição correta com o uso de gesso, é necessário fazer a cirurgia.
          Dependendo da fratura, há várias opções para manter os ossos na posição correta até a consolidação:
          gesso; pinos metálicos (normalmente de aço inoxidável ou titânio);</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>
<div class="row coluna">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Título especial</h5>
        <p class="text">Quando o osso está muito fora do lugar e não pode ser corrigido 
          ou mantido na posição correta com o uso de gesso, é necessário fazer a cirurgia.
          Dependendo da fratura, há várias opções para manter os ossos na posição correta até a consolidação:
          gesso; pinos metálicos (normalmente de aço inoxidável ou titânio); </p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Título especial</h5>
        <p class="card-text">Quando o osso está muito fora do lugar e não pode ser corrigido 
          ou mantido na posição correta com o uso de gesso, é necessário fazer a cirurgia.
          Dependendo da fratura, há várias opções para manter os ossos na posição correta até a consolidação:
          gesso; pinos metálicos (normalmente de aço inoxidável ou titânio);</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/feather.mim.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>