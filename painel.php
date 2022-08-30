<!--Código HTML5-->
<!doctype html>

<html lang="pt-br">
<!--Inicío do HTML-->

<head>
  <!--Inicío do head-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Antonio / Jose Carlos">
  <title>CaronaAI</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/geral.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/carousel.css" rel="stylesheet">

</head>
<!--Fim do head-->

<body>
  <!--Inicío do body-->

  <header>
    <!--Inicío do header-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CaronaAi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar-carona.php">Cadastrar Caronas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar-veiculo.php">Cadastrar veículo</a>
            </li>
          </ul>
          <!--Barra de pesquisa e botão de pesquisa-->
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Procurar carona" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Procurar</button>
          </form>
          <!-- Botão Siar -->
          <a href="logout.php" class="btn btn-primary">Sair</a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container-fluid">
      <?php include_once 'acoes/escreve-mensagem.php'; ?>
    </div>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <!-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/imagem01.jpg" alt="Foto de trabalho" />

          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Cadastre suas Caronas</h1>
              <p>Mantenha suas caronas atualizadas.</p>
              <p><a class="btn btn-lg btn-primary" href="cadastrar-formacao.php">Cadastrar Carona</a></p>
            </div>
          </div>
        </div>
        <!-- <div class="carousel-item">
          <img src="images/imagem02.jpg" alt="Foto de trabalho" />

          <div class="container">
            <div class="carousel-caption">
              <h1>Cadastrar Vans</h1>
              <p>Facilite o seu negocio de vans.</p>
              <p><a class="btn btn-lg btn-primary" href="cadastrar-curso.php">Cadastrar Vans</a></p>
            </div>
          </div>
        </div> -->
        <div class="carousel-item">
          <img src="images/imagem03.jpg" alt="Foto de trabalho" />

          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Atualize sempre seu perfil</h1>
              <p>Deixe os seus dados pessoais e de contato sempre atualizados.</p>
              <p><a class="btn btn-lg btn-primary" href="perfil.php">Atualizar perfil</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg> -->

          <h2 class="fw-normal">Agende ou procure uma carona!</h2>
          <p>Não importa para onde você vai, de ônibus ou de carona, encontre a viagem perfeita entre nossos vários destinos e trajetos, todos com preços baixos.</p>
          <!-- <p><a class="btn btn-secondary" href="cadastrar-carona.php">Cadastrar Carona &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg> -->

          <h2 class="fw-normal">Garantia de quem vai com você</h2>
          <p>Para nós, é muito importante conhecer cada um dos nossos membros e parceiros de ônibus. Conferimos as avaliações, perfis e documentações, assim você sempre sabe com quem vai viajar e pode reservar sua viagem com tranquilidade e segurança na nossa plataforma</p>
          <!-- <p><a class="btn btn-secondary" href="cadastrar-van.php">Cadastrar Vans &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg> -->

          <h2 class="fw-normal">Procure, clique e viaje!</h2>
          <p>Reservar uma viagem nunca foi tão fácil! Graças à nossa tecnologia e à simplicidade do app, você reserva sua viagem em poucos minutos</p>
          <!-- <p><a class="btn btn-secondary" href="configuracoes.php">Configurar &raquo;</a></p> -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="#">Ir para o topo</a></p>
      <p>&copy; 2022 Antonio & Carlos. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
  </main>


  <script src="assets/js/bootstrap.bundle.min.js"></script>


</body>
<!--Fim do body-->

</html>
<!--Fim do HTML-->