<?php

include('protect.php');

require_once 'conexao.php';

    if (isset($_GET['relato_id'])) {
      $relato_id = $_GET['relato_id'];
      // Obtener la información del relato específico
      $sql = "SELECT * FROM relato WHERE idR = '$relato_id'";
      $result = $conexao->query($sql);
      $row = $result->fetch_assoc();
      $altura = $row["altura"];
      $peso = $row["peso"];
      $idade = $row["idade"];
      $sexo = $row["sexo"];
      $dataR = $row["dataR"];
      $titulo = $row["titulo"];
      $relato = $row["relatoD"];
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
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search ">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li class="nav-item"><a class="nav-link" href="relato.php">
                <span data-feather="book" style="color: white;"></span>&nbsp;&nbsp;Relatar
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="meus_relatos.php">
                <span data-feather="book-open" style="color: white;"></span>&nbsp;&nbsp;Meus Relatos
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="busca_pl.php">
                <span data-feather="globe" style="color: white;"></span>&nbsp;&nbsp;Navegar
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt nav_icon"></i>
                <span data-feather="log-out" style="color: white;"></span>&nbsp;&nbsp;Sair</a>
            </li>
        </div>
      </div>
    </div>
  </nav>

</header>

<body>

  <div class="row coluna">
    <div class="card">
      <div class="card-body" style="text-align: center;">
      <h1><?php echo $titulo; ?></h1>
        <p class="card-text" name="relato" id="relatoID"></p>
      </div>
      <div class="card-body d-flex justify-content-between">
        <p><b>Altura: <?php echo $altura; ?> Mt </b></p>
        <p><b>Peso: <?php echo $peso; ?> Kg </b></p>
      </div>
      <div class="card-body d-flex justify-content-between">
        <p><b>Idade:<?php echo $idade; ?> años </b></p>
        <p><b>Sexo: <?php echo $sexo; ?> </b></p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <p class="card-text">&nbsp;&nbsp;Uma fratura do pulso é uma lesão comum que pode ocorrer em qualquer uma das oito
        pequenas
        ossos do pulso. Os sintomas podem incluir dor intensa, inchaço, hematomas, dificuldade em mover o pulso e
        uma sensação de crepitação ao mover a articulação. <br><br>&nbsp;&nbsp; O tratamento de uma fratura do pulso
        depende do tipo e da
        gravidade da lesão. Em alguns casos, o médico pode imobilizar o pulso com uma tala ou gesso até que a fratura
        comece a
        cicatrizar. Em casos mais graves, pode ser necessário realizar uma cirurgia para realinhar os ossos e fixá-los
        com
        placas, parafusos ou outros dispositivos de fixação. <br><br> &nbsp;&nbsp; Durante o processo de cicatrização, é
        importante seguir as orientações
        médicas para garantir a cura adequada da fratura. Isso pode incluir fisioterapia para ajudar a recuperar a força
        e a flexibilidade
        do pulso e evitar a rigidez ou outros problemas a longo prazo.<br> <br> &nbsp;&nbsp;Além disso, é importante
        tomar medidas preventivas para evitar
        fraturas do pulso no futuro, como usar equipamentos de proteção adequados durante a prática de esportes ou
        atividades de alto
        risco e manter uma boa postura e ergonomia ao trabalhar com as mãos e pulsos por longos períodos. </p>
      <a href="./Busca_pos_login.php" class="btn btn-primary botao">Voltar</a>

    </div>

    <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/feather.mim.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>

</body>

</html>