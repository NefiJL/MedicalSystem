<?php
// Importar archivo de conexión a la base de datos
session_start();
require_once 'conexao.php';
// Inicializar variables de entrada de usuario
$nome = '';
$email = '';
$especialidade = '';
$crm = '';
$senha = '';

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['nome'])) {
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
      }

    if (isset($_POST['email'])) {
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
      }
      
      if (isset($_POST['especialidade'])) {
        $especialidade = mysqli_real_escape_string($conexao, $_POST['especialidade']);
      }
      
      if (isset($_POST['crm'])) {
        $crm = mysqli_real_escape_string($conexao, $_POST['crm']);
      }
      
      if (isset($_POST['senha'])) {
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
      }

    // Verificar si el email ya existe en la base de datos
    $sql = "SELECT email FROM usuario WHERE email = '$email'";
    $vericarMail = mysqli_query($conexao, $sql);
    $count = mysqli_num_rows($vericarMail);

    // Verificar si el crm ya existe en la base de datos
    $sql = "SELECT CRM FROM usuario WHERE CRM = '$crm'";
    $vericarCrm = mysqli_query($conexao, $sql);
    $count2 = mysqli_num_rows($vericarMail);

    if ($count > 0) {

        // Si el email ya existe, mostrar un mensaje de error al usuario y no realizar la inserción de los datos del usuario
        echo "O e-mail já existe no banco de dados. Tente novamente com um e-mail diferente.";
    
    }
    if ($count2 > 0) {

        // Si el crm ya existe, mostrar un mensaje de error al usuario y no realizar la inserción de los datos del usuario
        echo "O CRM já existe no banco de dados. Por favor, tente novamente com um crm diferente.";

    } else {

   // Preparar consulta de inserción de usuario
   $sql = "INSERT INTO usuario (nome, email, especialidade, crm, senha) VALUES ('$nome','$email', '$especialidade', '$crm', '$senha')";
   
   // Executa a query SQL
    if (mysqli_query($conexao, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conexao);
    }

    // Redireccionar al usuario a la página de inicio de sesión
    header("Location: login.php");

// Guardar datos en variables de sesión
$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['especialidade'] = $especialidade;
$_SESSION['crm'] = $crm;
$_SESSION['senha'] = $senha;
 

// Cerrar la conexión a la base de datos
mysqli_close($conexao);
    }
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

                    <input type="text" id="inputNome" class="input" name="nome" placeholder="a" required autofocus>
                    <label for="inputNome" class="label">Nome de usuario</label>

                </div>
                
                <div class="inputContainer">

                    <input type="email" id="inputEmail" class="input" name="email" placeholder="a" required>
                    <label for="inputEmail"" class="label">E-mail</label>

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

                    <input type="password" id="inputSenhaR" class="input" name="senha" placeholder="a" required>
                    <label for="inputSenhaR" class="label">Senha</label>

                </div>

                <br><button class=" btn btn-lg btn-primary btn-block" type="submit"
                    style="margin-top: 60px; width: 250px; height: 48px;">Continuar</button>

            </form>

            <div class="form-check" style="margin-top: -95px; margin-left: 18px;">
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                <label class="form-check-label" style="margin-left: -40px;" for="flexCheckDefault">
                    Aceito os termos e condições
                </label>

                <p style="text-center; margin-top: 80px; margin-left:-50px;"><a href="./login.php">Iniciar sessão</a></p>
                
            </div>

        </div>

</body>

</html>