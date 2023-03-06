<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MedicalSystem</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">MedicalSystem</a>
    </nav>
</header>

<body class=" text-center">

    <div class="backgroundL">

        <form class="form-signin">

            <h1 class=" h3 mb-3 font-weight-normal" style="font-size: 28px;">Log in</h1>

            <div class="inputContainer">

                <input type="text" id="inputLogin" class="input" placeholder="a" required autofocus>
                <label for="inputlogin" class="label">Email</label>

            </div>

            <div class="inputContainer">

                <input type="text" id="inputSenhaL" class="input" placeholder="a" required>
                <label for="inputSenhaL" class="label">Senha</label>

                <button class="btn btn-lg btn-primary btn-block" style="margin-top: 80px;" type="submit">Log-in</button>

                <p style="text-center; margin-top: 20px"><a href="./registro.php">Criar conta</a></p>
            </div>

        </form>

    </div>

</body>

</html>