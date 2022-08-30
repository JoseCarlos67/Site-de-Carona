<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Cadastrar Veículo </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema-curriculo.css" />
  <link rel="stylesheet" href="assets/css/form-validation.css" />

</head>

<body>

  <!-- barra de navegacao -->
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">CADASTRAR</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
          <li><a href="painel.php">X</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- container fluido 100% -->
  <div class="container-fluid bg1 text-center cadVeículo" id="quem">

    <h3>Cadastro de Veículo</h3>

    <form action="acoes/cria-Veículo.php" method="POST" class="needs-validation container" novalidate>

      <div class="row g-12">

        <div class="col-sm-12">
          <label for="modelo_veiculo" class="form-label">Modelo</label>
          <input type="text" class="form-control" id="modelo_veiculo" name="modelo_veiculo" placeholder="Modelo do veículo aqui" value="" autofocus required>
          <div class="invalid-feedback">
            Digite o modelo do veículo
          </div>
        </div>

        <div class="col-sm-12">
          <label for="marca_veiculo" class="form-label">Marca</label>
          <input type="text" class="form-control" id="marca_veiculo" name="marca_veiculo" placeholder="Marca do veículo aqui" value="" autofocus required>
          <div class="invalid-feedback">
            Digite a marca do veículo
          </div>
        </div>

        <div class="col-sm-12">
          <label for="placa" class="form-label">Placa</label>
          <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa do veículo aqui" value="" required>
          <div class="invalid-feedback">
            Digite a placa do vaículo
          </div>
        </div>

        <div class="col-sm-12">
          <label for="chassi" class="form-label">Chassi</label>
          <input type="text" class="form-control" id="chassi" name="chassi" placeholder="Chassi do veículo aqui" value="" required>
          <div class="invalid-feedback">
            Digite o chassi do veículo
          </div>
        </div>

        <div class="col-md-12">
          <label for="ano_veiculo" class="form-label">Ano do Veículo</label>
          <input type="number" class="form-control" id="ano_veiculo" name="ano_veiculo" placeholder="1999" min="1950" max="2050" step="1" required>
          <div class="invalid-feedback">
            Digite o ano do Veículo
          </div>
        </div>

        <div class="col-md-12">
          <!---->
          <label for="gender" class="form-label">Tipo do veículo</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Selecione o tipo aqui</option>
            <option value="carro">Carro</option>
            <option value="moto">Moto</option>
            <option value="outro">Outro</option>
          </select>
        </div>
        <!---->

        <input type="hidden" id="idusuario" name="idusuario" />
      </div>
      <br>
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
        Cadastrar
      </button>

    </form>
  </div>

  <!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>

</body>

</html>