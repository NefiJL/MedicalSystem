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

                <select class="form-select" aria-label="Default select example" placeholder="a" required>
                    <option selected>Especialidade</option>
                    <option value="1">Alergista</option>
                    <option value="2">Alergista pediátrico</option>
                    <option value="3">Anátomopatologista</option>
                    <option value="4">Anestesiologista</option>
                    <option value="5">Angiologista</option>
                    <option value="6">Cardiologista</option>
                    <option value="7">Cardiologista pediátrico</option>
                    <option value="8">Cirurgião buco-maxilo-facial</option>
                    <option value="9">Cirurgião cardiovascular</option>
                    <option value="10">Cirurgião cranio-=maxilo-facial</option>
                    <option value="11">Cirurgião da mão</option>
                    <option value="12">Cirurgião de cabeça e pescoço</option>
                    <option value="13">Cirurgião do aparelho digestivo</option>
                    <option value="14">Cirurgião geral</option>
                    <option value="15">Cirurgião oncológico</option>
                    <option value="16">Cirurgião pediátrico</option>
                    <option value="17">Cirurgião plástico</option>
                    <option value="18">Cirurgião torácico</option>
                    <option value="19">Cirurgião vascular</option>
                    <option value="20">Coloproctologista</option>
                    <option value="21">Dentista</option>
                    <option value="22">Dermatologista</option>
                    <option value="23">Educador Fisico</option>
                    <option value="24">Endocrinologista</option>
                    <option value="25">Endocrinologista pediátrico</option>
                    <option value="26">Endoscopista</option>
                    <option value="27">Enfermeiro</option>
                    <option value="28">Especialista em Administração em Saúde</option>
                    <option value="29">Especialista em Biomedicina</option>
                    <option value="30">Especialista em Clínica Médica</option>
                    <option value="31">Especialista em Diagnóstico por imagem</option>
                    <option value="32">Especialista em Dor</option>
                    <option value="33">Especialista em Harmonização orofacial</option>
                    <option value="34">Especialista em Medicina do adolescente</option>
                    <option value="35">Especialista em Medicina Estética</option>
                    <option value="36">Especialista em Medicina Fisica e Reabilitação</option>
                    <option value="37">Especialista em Medicina Nuclear</option>
                    <option value="38">Especialista em Medicina Preventiva</option>
                    <option value="39">Especialista em Neonatologia</option>
                    <option value="40">Especialista em Reprodução Humana</option>
                    <option value="41">Especialista em Ultrassonografia</option>
                    <option value="42">Fisioterapeuta</option>
                    <option value="43">Fonoaudiólogo</option>
                    <option value="44">Gastroenterologista</option>
                    <option value="45">Gastroenterologista pediátrico</option>
                    <option value="46">Generalista</option>
                    <option value="47">Geneticista</option>
                    <option value="48">Geriatra</option>
                    <option value="49">Ginecologista</option>
                    <option value="50">Hematologista</option>
                    <option value="51">Hematologista pediátrico</option>
                    <option value="52">Hepatologista</option>
                    <option value="53">Homeopata</option>
                    <option value="54">Infectologista</option>
                    <option value="55">Infectologista pediátrico</option>
                    <option value="56">Intensivista</option>
                    <option value="57">Mastologista</option>
                    <option value="58">Médico Acupunturista</option>
                    <option value="59">Médico citopatologista</option>
                    <option value="60">Médico clinico geral</option>
                    <option value="61">Médico de emergência</option>
                    <option value="62">Médico de família</option>
                    <option value="63">Médico de tráfego</option>
                    <option value="64">Médico do esporte</option>
                    <option value="65">Médico do Sono</option>
                    <option value="66">Médico do trabalho</option>
                    <option value="67">Médico hiperbarista</option>
                    <option value="68">Médico perito</option>
                    <option value="69">Nefrologista</option>
                    <option value="70">Nefrologista pediátrico</option>
                    <option value="71">Neurocirurgião</option>
                    <option value="72">Neurofisiologista</option>
                    <option value="73">Neurologista</option>
                    <option value="74">Neurologista pediátrico</option>
                    <option value="75">Nutricionista</option>
                    <option value="76">Nutrólogo</option>
                    <option value="77">Odontopediatra</option>
                    <option value="78">Oftalmologista</option>
                    <option value="79">Oncologista</option>
                    <option value="80">Ortodontista</option>
                    <option value="81">Ortopedista - Traumatologista</option>
                    <option value="82">Osteopata</option>
                    <option value="83">Otorrino</option>
                    <option value="84">Patologista clínico</option>
                    <option value="85">Pediatra</option>
                    <option value="86">Pneumologista</option>
                    <option value="87">Pneumologista pediátrico</option>
                    <option value="88">Podologista</option>
                    <option value="89">Psicanalista</option>
                    <option value="90">Psicólogo</option>
                    <option value="91">Psicopedagogo</option>
                    <option value="92">Psiquiatra</option>
                    <option value="93">Quiropraxista</option>
                    <option value="94">Radiologista</option>
                    <option value="95">Radioterapeuta</option>
                    <option value="96">Reumatologista</option>
                    <option value="97">Reumatologista pediátrico</option>
                    <option value="98">Sexólogo</option>
                    <option value="99">Técnico em Métodos Gráficos em Cardiologia</option>
                    <option value="100">Técnico em radiologia</option>
                    <option value="101">Técnico em Saúde bucal</option>
                    <option value="102">Terapeuta complementar</option>
                    <option value="103">terapeuta ocupacional</option>
                    <option value="104">Urologista</option>
                    </select>
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