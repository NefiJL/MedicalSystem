<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você ainda não inicio sessão.<p><a href=\"login.php\">iniciar sessão</a></p>");
}

?>