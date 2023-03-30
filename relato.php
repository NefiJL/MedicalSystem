<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/relato.css">
  <script src='./js/bootstrap.bundle.js'></script>
</head>
<header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">MedicalSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

</header>

<body id="corpo">
  <form>
    <div class="mb-3 texto">
      <h1 class="paciente">Dados do paciente</h1>
      <label class="altura" for="altura">Altura:</label>
      <input type="text" class="form-control" id="altura" name="altura" placeholder="Digite sua altura" required>

      <label for="idade" class="idade">Idade:</label>
      <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite sua idade" required>

      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Masculino</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Feminino</label>
</div>
    
        <label for="data" class="data">Data:</label>
        <input type="date" class="form-control" id="data" name="data" placeholder="Digite a data" required>
      </div>
      <div class="mb-3 texto">
        <label for="mensagem" class="form-label">Mensagem:</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
      </div>
      <input id="btn" type="submit" value="Publicar">
  </form>
  <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./js/feather.mim.js"></script>
  <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="./js/menu.js"></script>
</body>

</html>