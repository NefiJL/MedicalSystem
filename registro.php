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

        <form action="registro2.php" class="form-signin">

            <h1 class=" h3 mb-3 font-weight-normal">Sing up</h1>

            <div class="inputContainer">

                <input type="text" id="inputNome" class="input" placeholder="a" required autofocus>
                <label for="inputNome" class="label">Nome</label>

            </div>

            <div class="inputContainer">

                <input type="text" id="inputEmail" class="input" placeholder="a" required>
                <label for="inputEmail" class="label">E-mail</label>

                <input type="submit" name="btnregistro" value="Continuar" class="btn btn-lg btn-primary btn-block"
                    style="margin-top: 30%;">

                    <p style="text-center; margin-top: 20px"><a href="./login.php">Iniciar sessão</a></p>
            </div>

        </form>

    </div>

</body>

</html>