<?php
session_start();
require_once 'conexao.php';

$cidade = '';
$especialidade = '';
$crm = '';
$telefone = '';
$senha = '';


// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cidade'])) {
        $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
      }
      
      if (isset($_POST['especialidade'])) {
        $especialidade = mysqli_real_escape_string($conexao, $_POST['especialidade']);
      }
      
      if (isset($_POST['crm'])) {
        $crm = mysqli_real_escape_string($conexao, $_POST['crm']);
      }
      
      if (isset($_POST['telefone'])) {
        $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
      }
      
      if (isset($_POST['senha'])) {
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
      }

   // Preparar consulta de inserción de usuario
   $stmt = mysqli_prepare($conexao, "INSERT INTO usuario (cidade, especialidade, crm, telefone, senha) VALUES (?, ?, ?, ?, ?)");
   mysqli_stmt_bind_param($stmt, "sssss", $cidade, $especialidade, $crm, $telefone, $senha);
 
   // Guardar datos en variables de sesión
  $_SESSION['cidade'] = $cidade;
  $_SESSION['especialidade'] = $especialidade;
  $_SESSION['crm'] = $crm;
  $_SESSION['telefone'] = $telefone;
  $_SESSION['senha'] = $senha;

   // Cerrar la conexión a la base de datos
 mysqli_close($conexao);

 // Cerrar la consulta preparada
 mysqli_stmt_close($stmt);
 
 
 exit();

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
    <link rel="stylesheet" type="text/css" href="./css/registro2.css">
</head>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">MedicalSystem</a>
    </nav>

</header>

<body class=" text-center">

        <div class="backgroundR">

        <form class="form-signin" method="POST">
                <div class="inputContainer">

                    <input type="text" id="inputCidade" class="input" name="cidade" placeholder="a" required autofocus>
                    <label for="inputCidade" class="label">Cidade</label>

                </div>

                <div class="inputContainer">

                    <input type="text" id="inputEspecialidade" class="input" name="especialidade" placeholder="a" required>
                    <label for="inputEspecialidade" class="label">Especialidade</label>

                </div>

                <div class="inputContainer">

                    <input type="text" id="inputCRM" class="input" name="crm" placeholder="a" required>
                    <label for="inputCRM" class="label">Numero de registro (CRM)</label>

                </div>

                <div class="inputContainer">

                    <input type="tel" id="inputTel" class="input" name="telefone" placeholder="a" required>
                    <label for="inputTel"" class="label">Telefone</label>

                </div>


                <div class="inputContainer">

                    <input type="password" id="inputSenhaR" class="input" name="senha" placeholder="a" required>
                    <label for="inputSenhaR" class="label">Senha</label>

                </div>

                <br><button class=" btn btn-lg btn-primary btn-block" type="submit"
                    style="margin-top: 60px; width: 250px; height: 48px;">Continuar</button>

            </form>

            <div class="form-check" style="margin-top: -95px; margin-left: 18px;">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Aceito os termos e condições
                </label>
            </div>

        </div>

</body>

</html>