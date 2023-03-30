<?php
// Importar archivo de conexión a la base de datos
require_once 'conexao.php';

// Inicializar variables de entrada de usuario
$nome = '';
$email = '';

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validar y limpiar los datos de entrada del usuario
  $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
  $email = mysqli_real_escape_string($conexao, $_POST['email']);

  // Guardar datos en variables de sesión
  $_SESSION['nome'] = $nome;
  $_SESSION['email'] = $email;

  
// Cerrar la conexión a la base de datos
mysqli_close($conexao);

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
    <link rel="stylesheet" type="text/css" href="./css/registro.css">
</head>

<header>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">MedicalSystem</a>
        </nav>

</header>

<body class=" text-center">

    <div class="backgroundR">

        <form method="POST" action="registro2.php"  class="form-signin">

            <h1 class=" h3 mb-3 font-weight-normal">Registrar-se</h1>

            <div class="inputContainer">

                <input type="text" id="inputNome" class="input" placeholder="a" name="nome" required autofocus>
                <label for="inputNome" class="label">Nome</label>

            </div>

            <div class="inputContainer">

                <input type="text" id="inputEmail" class="input" placeholder="a" name="email" required>
                <label for="inputEmail" class="label">E-mail</label>

                <input type="submit" name="btnregistro" value="Continuar" class="btn btn-lg btn-primary btn-block"
                    style="margin-top: 30%;"><br>

                </div>
                
                
        </form>

    </div>

</body>

</html>