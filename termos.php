<?php
require_once 'conexao.php';

$telefone = '';
$emailM = '';

if (isset($_GET['idM'])) {
  $idM = $_GET['idM'];
  // Obtener la información del relato específico
  $sql = "SELECT * FROM medicalsystem WHERE idM = '$idM'";
  $result = $conexao->query($sql);
  $row = $result->fetch_assoc();
  $telefone = $row["telefone"];
  $emailM = $row["emailM"];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MedicalSystem</title>
  <link rel="icon" href="./img/M4.png" type="image/x-icon">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script src='./js/bootstrap.bundle.js'></script>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">MedicalSystem</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="./login.php">
              <span data-feather="user" style="color: white;"></span>&nbsp;&nbsp; Iniciar sessão
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./registro.php">
              <span data-feather="user-plus" style="color: white;"></span>&nbsp;&nbsp; Criar uma Conta
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="visitante/busca_resultado_V.php" method="GET">
          <div class="input-group">
            <input name="busca2" class="form-control me-2" type="search" placeholder="Faça uma pesquisa" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>
<body>

<div class="" style="margin-left: 10%; margin-right: 10%; margin-top: 5%;">
  <div class="card mx-auto bg-dark">
    <div class="card-body text-white" style="text-align: justify;">
      <p class="card-text"><b>Em nosso site, gostaríamos de deixar claro que não assumimos nenhuma responsabilidade pelo conteúdo fornecido. Nosso objetivo é fornecer informações e recursos de forma geral, mas não podemos garantir a precisão, integridade ou atualidade dessas informações.</b></p>

      <p class="card-text"><b>O conteúdo encontrado em nosso site pode vir de várias fontes e pode estar sujeito a alterações ou atualizações sem aviso prévio. Não podemos garantir que as informações sejam abrangentes, confiáveis ou adequadas para qualquer propósito específico.</b></p>

      <p class="card-text"><b>É importante ter em mente que qualquer prática ou ação descrita em nosso site é fornecida apenas para fins informativos. Não recomendamos nem encorajamos a aplicação ou execução de qualquer uma dessas práticas. Cada indivíduo é responsável por sua própria conduta e deve agir com prudência e de acordo com as leis e regulamentos aplicáveis em sua jurisdição.</b></p>

      <p class="card-text"><b>Além disso, nos isentamos de qualquer responsabilidade por danos ou prejuízos que possam surgir como resultado do uso das informações fornecidas em nosso site. Os usuários devem exercer seu próprio julgamento e avaliar a adequação de qualquer informação, conselho ou recomendação antes de tomar qualquer decisão ou empreender qualquer ação com base nessas informações.</b></p>

      <p class="card-text"><b>Ao acessar e usar nosso site, você concorda que não seremos responsáveis por qualquer dano direto, indireto, incidental, consequencial ou de qualquer outro tipo que possa surgir como resultado de seu uso ou acesso às informações em nosso site.</b></p>

      <p class="card-text"><b>Recomendamos sempre buscar aconselhamento profissional ou consultar fontes adicionais antes de tomar decisões ou empreender ações que possam ter consequências significativas.</b></p>

      <p class="card-text"><b>Resumindo, nosso site não assume nenhuma responsabilidade pelo conteúdo fornecido e não deve ser aplicada ou executada nenhuma das práticas descritas nele. Os usuários são responsáveis por sua própria conduta e devem avaliar cuidadosamente as informações antes de tomar decisões ou empreender ações.</b></p>

      <br><br>
      <div style="display: flex; justify-content: space-between;">
        <a style="margin-right: auto;" href="index.php" class="btn btn-primary botao">Voltar</a>
      </div>
    </div>
  </div>
</div>


</footer>
  <script type="text/javascript" src="./js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="./js/feather.mim.js"></script>
  <script type="text/javascript" src="./js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="./js/menu.js"></script>
  <script type="text/javascript" src="./js/campo_pesquisa.js"></script>
  <script type="text/javascript">
  </script>
</body>
</html>
