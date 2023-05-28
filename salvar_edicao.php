<?php
include('protect.php');
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los datos enviados desde el formulario
  $altura = mysqli_real_escape_string($conexao, $_POST['altura']);
  $peso = mysqli_real_escape_string($conexao, $_POST['peso']);
  $idade = mysqli_real_escape_string($conexao, $_POST['idade']);
  $sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
  $titulo = mysqli_real_escape_string($conexao, $_POST['titulo']);
  $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
  $relato = mysqli_real_escape_string($conexao, $_POST['relato']);
  $relato_id = mysqli_real_escape_string($conexao, $_POST['relato_id']);
  
  // Actualizar los datos del relato en la base de datos utilizando una sentencia preparada
  $sql = "UPDATE relato SET altura=?, peso=?, idade=?, sexo=?, titulo=?, observacao=?, relatoD=? WHERE idR=?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("ssissssi", $altura, $peso, $idade, $sexo, $titulo, $observacao, $relato, $relato_id);
  $stmt->execute();
  
  // Redireccionar al archivo "visualizar_meu_relato.php" después de guardar los cambios
  header("Location: meusRelatos.php");
  exit();
}
?>
