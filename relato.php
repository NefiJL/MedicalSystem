<?php
// Importar archivo de conexión a la base de datos
session_start();
require_once 'conexao.php';

include('protect.php');

// Inicializar variables de entrada de usuario
$altura = '';
$peso = '';
$idade = '';
$sexo = '';
$dataR = '';
$observacao = '';
$relatoD = '';
$titulo = '';

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['altura'])) {
        $altura = mysqli_real_escape_string($conexao, $_POST['altura']);
      }

      if (isset($_POST['peso'])) {
        $peso = mysqli_real_escape_string($conexao, $_POST['peso']);
      }

    if (isset($_POST['idade'])) {
        $idade = mysqli_real_escape_string($conexao, $_POST['idade']);
      }
      
      if (isset($_POST['sexo'])) {
        $sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
      }
      
      if (isset($_POST['dataR'])) {
        $dataR = mysqli_real_escape_string($conexao, $_POST['dataR']);
      }

      if (isset($_POST['observacao'])) {
        $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
      }
      
      if (isset($_POST['relatoD'])) {
        $relatoD = mysqli_real_escape_string($conexao, $_POST['relatoD']);
      }

      if (isset($_POST['titulo'])) {
        $tiutlo = mysqli_real_escape_string($conexao, $_POST['titulo']);
      }

   // Preparar consulta de inserción de en el relato
   $sql = "INSERT INTO relato (altura, peso, idade, sexo, dataR, titulo, observacao, relatoD) VALUES ('$altura', '$peso', '$idade', '$sexo', '$dataR', '$tiutlo','$observacao', '$relatoD')";

   
   // Executa a query SQL
    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conexao);
    }

    // Redireccionar al usuario a la página de inicio de sesión
    header("Location: usuario_Pos_login.php");

// Guardar datos en variables de sesión
$_SESSION['altura'] = $altura;
$_SESSION['peso'] = $peso;
$_SESSION['idade'] = $idade;
$_SESSION['sexo'] = $sexo;
$_SESSION['dataR'] = $dataR;
$_SESSION['observacao'] = $observacao;
$_SESSION['titulo'] = $titulo;
$_SESSION['relatoD'] = $relatoD;
 

// Cerrar la conexión a la base de datos
mysqli_close($conexao);
    }
?>

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/relato.css">
</head>
<header>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./usuario_Pos_login.php">MedicalSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

</header>

<body id="corpo">
  
  <form method="POST">
    
    <div class="mb-3 texto">

      <h1 class="paciente">Dados do paciente</h1>

      <label for="altura">Altura (M):</label>
      <input type="text" class="form-control" id="altura" name="altura" placeholder="Exemplo: 1.84" required>

      <label for="peso">Peso (Kg):</label>
      <input type="text" class="form-control" id="peso" name="peso" placeholder="Exemplo: 65.4" required>
      
      <label for="idade">Idade:</label>
      <input type="number" class="form-control" id="idade" name="idade" placeholder="Exemplo: 20" required>
      
      <label for="sexo">Sexo:</label>
      <input type="text" class="form-control" id="sexo" name="sexo" placeholder="F (para femenino) ou M (para masculino)" required>
      
      <label for="data">Data:</label>
      <input type="date" class="form-control" id="dataR" name="dataR" placeholder="dd/mm/aa" required>

      <label for="titulo">Titulo:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do relato" required>
      
    </div>

    <div class="mb-3 texto">
      <label for="observacao" class="form-label" style="margin-left: 50%;">Obsevações</label>
      <textarea class="form-control" id="observacao" name="observacao"></textarea>
    </div>

    <div class="mb-3 texto">
      <label for="relato" class="form-label" style="margin-left: 50%;">Faça seu relato</label>
      <textarea class="form-control" id="relatoD" name="relatoD" rows="20" required></textarea>
    </div>
    
    
    <div style="text-align: center; margin-top: -30px;">

      <input id="btn" type="submit" value="Publicar" style="margin-left: 50px;">
    
    </div>
    
  </form>
  
  <script src='./js/bootstrap.bundle.js'></script>
  <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./js/feather.mim.js"></script>
  <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>