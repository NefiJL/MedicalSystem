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
        <div id="Menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./index.php">Principal</a></li>
                <li class="nav-item"><a class="nav-link" href="./login.php">Entrar</a></li>
                <li class="nav-item"><a class="nav-link" href="./registro.php">Registrarse</a></li>
            </ul>
        </div>
    </nav>
</header>

<body class=" text-center">

    <form class="form-signin">

        <div class="backgroundR">

            <form class="form-signin">

                <div class="inputContainer">

                    <input type="text" id="inputCidade" class="input" placeholder="a" required autofocus>
                    <label for="inputCidade" class="label">Cidade</label>

                </div>

                <div class="inputContainer">

                    <input type="text" id="inputEspecialidade" class="input" placeholder="a" required>
                    <label for="inputEspecialidade" class="label">Especialidade</label>

                </div>

                <div class="inputContainer">

                    <input type="text" id="inputCRM" class="input" placeholder="a" required>
                    <label for="inputCRM" class="label">Numero de registro (CRM)</label>

                </div>

                <div class="inputContainer">

                    <input type="tel" id="inputTel" class="input" placeholder="a" required>
                    <label for="inpuTtel" class="label">Telefone</label>

                </div>


                <div class="inputContainer">

                    <input type="password" id="inputSenhaR" class="input" placeholder="a" required>
                    <label for="inputSenhaR" class="label">Senha</label>

                </div>

                <div class="inputContainer">

                    <input type="password" id="inputSenhaR2" class="input" placeholder="a" required>
                    <label for="inputSenhaR2" class="label">Conforme a senha</label>

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