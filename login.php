<?php
include('conexao.php');

    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email'])==0){
            echo "Preencha seu e-mail";
        } else if (strlen($_POST['senha'])==0){
            echo "Preencha sua senha";
    }else{
        
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        //$senha = md5(md5($_POST['senha']));


        //verifar si el usuario existe
        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die ("Falha na execução do codigo SQL: ". $conexao->error);

        echo($sql_code);
        $quantidade = $sql_query->num_rows;

        //Realizando log-in
        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            //iniciando sesión
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: usuario_Pos_login.php");

        } else{
            echo "Verifique seu E-mail e sua senha e tente novamente";
        }
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

       <form action="" method="POST" class="form-signin">

       <h1 class=" h3 mb-3 font-weight-normal" style="font-size: 28px;">Log in</h1>

            <div class="inputContainer">

                <input type="text" id="inputLogin" class="input" placeholder="a" name="email" required autofocus >
                <label for="inputlogin" class="label">E-mail</label>

            </div>

            <div class="inputContainer">

                <input type="password" id="inputSenhaL" class="input" placeholder="a" name="senha" required >
                <label for="inputSenhaL" class="label">Senha</label>

                <button class="btn btn-lg btn-primary btn-block" style="margin-top: 80px;" type="submit">Log-in</button>

                <p style="text-center; margin-top: 20px"><a href="./registro.php">Criar uma conta?</a></p>
            </div>

       </form>   

    </div>

</body>

</html>