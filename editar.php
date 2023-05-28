<?php
include('protect.php');

require_once 'conexao.php';

// Verificar si se ha proporcionado un valor para 'relato_id'
if (isset($_GET['relato_id'])) {
  $relato_id = mysqli_real_escape_string($conexao, $_GET['relato_id']);
  
  // Obtener la información del relato específico utilizando una sentencia preparada
  $sql = "SELECT * FROM relato WHERE idR = ?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $relato_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  
  // Verificar si se encontró el relato
  if ($row) {
    $altura = $row["altura"];
    $peso = $row["peso"];
    $idade = $row["idade"];
    $sexo = $row["sexo"];
    $dataR = $row["dataR"];
    $titulo = $row["titulo"];
    $relato = $row["relatoD"];
    $usuario_id = $row["doctor_id"];
    
    // Obtener el nombre del usuario utilizando una sentencia preparada
    if (isset($usuario_id)) {
      $sql = "SELECT * FROM usuario WHERE id = ?";
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("i", $usuario_id);
      $stmt->execute();
      $result = $stmt->get_result();
      $row_usuario = $result->fetch_assoc();
      $nome = $row_usuario["nome"];
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem - Editar Relato</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script src='./js/bootstrap.bundle.js'></script>
</head>
<body>
  <div class="container">
    <h1>Editar Relato</h1>
    <form method="POST" action="salvar_edicao.php">
      <div class="mb-3">
        <label for="altura" class="form-label">Altura</label>
        <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $altura; ?>" required>
      </div>
      <div class="mb-3">
        <label for="peso" class="form-label">Peso</label>
        <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>" required>
      </div>
      <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $idade; ?>" required>
      </div>
      <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select class="form-select" id="sexo" name="sexo" required>
          <option value="Masculino" <?php if ($sexo === 'Masculino') echo 'selected'; ?>>Masculino</option>
          <option value="Femenino" <?php if ($sexo === 'Femenino') echo 'selected'; ?>>Femenino</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo; ?>" required>
      </div>
      <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="4" required><?php echo $relato; ?></textarea>
      </div>
      <div class="mb-3">
        <label for="relato" class="form-label">Relato</label>
        <textarea class="form-control" id="relato" name="relato" rows="8" required><?php echo $relato; ?></textarea>
      </div>
      <input type="hidden" name="relato_id" value="<?php echo $relato_id; ?>">
      <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
  </div>
  <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./js/feather.mim.js"></script>
  <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="./js/menu.js"></script>
</body>
</html>