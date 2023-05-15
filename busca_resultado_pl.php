<?php
include('protect.php');

if (!isset($_SESSION)) {
    session_start();
}

require_once 'conexao.php';
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
    <a class="navbar-brand" href="./usuario_Pos_login.php">MedicalSystem</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search ">
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

<body id="body">
<main>
    <?php
    if (!isset($_GET['busca'])) {
    ?>

    <?php
    } else {
        $pesquisa = mysqli_real_escape_string($conexao, $_GET['busca']);

        $sql_code = "SELECT * FROM relato WHERE relatoD LIKE '%$pesquisa%' OR titulo LIKE '%$pesquisa%' OR relatoD LIKE '%$pesquisa%'";

        $sql_query = $conexao->query($sql_code) or die("ERRO ao consultar! " . $conexao->error);

        if ($sql_query->num_rows == 0) {
    ?>
            <h1>Upss... Nenhum resultado encontrado</h1>
    <?php
        } else {
            while ($row = $sql_query->fetch_assoc()) {
    ?>
                <div class="card border-dark text-bg-dark mb-3" style="max-width: 18rem; margin-top: 8.3%; margin-left: 3%; display: inline-block; width: 18rem; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center" name="titulo" id="tituloID"><b>
                                <?php echo $row["titulo"]; ?>
                            </b></h5>
                        <p class="card-text" name="relato" id="relatoID">
                            <?php echo $row["relatoD"]; ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" name="altura" id="alturaID"><b>Altura:</b>
                            <?php echo $row["altura"]; ?>Mt
                        </li>
                        <li class="list-group-item" name="peso" id="pesoID"><b>Peso:</b>
                            <?php echo $row["peso"]; ?>Kg
                        </li>
                        <li class="list-group-item" name="idade" id="IdadeID"><b>Idade:</b>
                            <?php echo $row["idade"]; ?>anos
                        </li>
                        <li class="list-group-item" name="sexo" id="sexoID"><b>Sexo:</b>
                            <?php echo $row["sexo"]; ?>
                        </li>
                    </ul>
                    <div class="card-body" style="text-align: center">
                        <button class="btn btn-outline-primary" type="submit">Visualizar</button>
                    </div>
                </div>
    <?php
            }
        }
    }
    ?>
</main>

    <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="./js/feather.mim.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    
</body>