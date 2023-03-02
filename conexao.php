<?php

$hostname = "localhost";
$bancodedados = "medicalsystem";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if($mysqli ->connect_errno) {

    echo "Falha ao conectar (". $mysqli -> connect_errno . ") " . $msqli -> connect_errno; 

}

else
    echo "Conectado ao Banco de Dados";

?>