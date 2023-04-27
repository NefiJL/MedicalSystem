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
  <link rel="stylesheet" href="./css/vizualizar_relato.css">
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
<div class="col-sm-3"  style="margin-top: 10%;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fratura Do Pé</h5>
          <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados, com os dedos do pé expostos, prendedores de Velcro e uma sola
            rígida para proteger o pé de mais lesões.Muitas vezes as pessoas são instruídas a não colocar nenhum
            peso no pé por um período. </p>
          <a href="#" class="btn btn-primary">Visualizar</a> <a href="editar_relato.php" class="btn btn-primary">Editar</a>
        </div>
      </div>
    </div>
  <div class="col-sm-3" style="margin-left: 30rem; margin-top: -25%;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fratura Do Pé</h5>
          <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados, com os dedos do pé expostos, prendedores de Velcro e uma sola
            rígida para proteger o pé de mais lesões.Muitas vezes as pessoas são instruídas a não colocar nenhum
            peso no pé por um período. </p>
          <a href="#" class="btn btn-primary">Visualizar</a> <a href="#" class="btn btn-primary">Editar</a>
        </div>
      </div>
  </div>
  
  <div class="col-sm-3"style="margin-left: 60rem;  margin-top: -26%;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fratura Do Pé</h5>
          <p class="card-text">O tratamento das fraturas do pé depende do osso fraturado e do tipo de fratura, mas
            geralmente envolve colocar o pé e o tornozelo em uma tala (e, às vezes, em um molde de gesso) ou em um
            calçado ou bota especialmente projetados, com os dedos do pé expostos, prendedores de Velcro e uma sola
            rígida para proteger o pé de mais lesões.Muitas vezes as pessoas são instruídas a não colocar nenhum
            peso no pé por um período. </p>
          <a href="#" class="btn btn-primary">Visualizar</a> <a href="#" class="btn btn-primary">Editar</a>
        </div>
      </div>
    </div>
  

<script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/feather.mim.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>