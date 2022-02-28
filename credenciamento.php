<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CENTROCARD SAÚDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="./assets/img/icon-semfundo.png" rel="icon">
  <link href="./assets/img/icon-semfundo.png" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/css/variables.css') ?>" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">
</head>
<style>
  .btn-cred {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 35px;
    margin-top: 30px;
    border-radius: 50px;
    transition: 0.5s;
    color: white;
    background: #0079a4;
  }
</style>

<body>
  <?php include "components/navbar-blue.php"; ?>
  <section id="hero3" class="hero3">
    <div class="container">
      <h2>CREDENCIAMENTO</h2>
    </div>
  </section><!-- End Hero Section -->
  <section>
    <div class="container">
      <form class="row g-3 bg-white">
        <div class="col-12">
          <label for="inputAddress" class="form-label">Razão social</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">CNPJ</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Site</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Tipo de prestador de Serviço</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              CLÍNICA/POLICLÍNICA
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              CONSULTÓRIO MÉDICO/ODONTOLÓGICO
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              LABORATÓRIO DE ANÁLISES CLÍNICAS
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              DIAGNÓSTICOS POR IMAGEM
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Tipos de Atendimentos</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              PRESENCIAL
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              ONLINE
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              DOMICILIAR
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              OUTROS
            </label>
          </div>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Complemento</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">Estado
          </label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">
            CEP</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Responsável
          </label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">
            Cargo
          </label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">
            Celular/WhatsApp</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Email
          </label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Como você conheceu ?

          </label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-cred">CADASTRE-SE</button>
        </div>
      </form>
    </div>
  </section>
  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
  <?php include "components/footer.php"; ?>
  <script src="<?php echo $URI->base('/assets/vendor/purecounter/purecounter.jsg') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/aos/aos.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
</body>

</html>