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

  <!-- Favicons -->
  <link href="./assets/img/icon-semfundo.png" rel="icon">
  <link href="./assets/img/icon-semfundo.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/variables.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/filter-services.css" rel="stylesheet">
</head>

<body>
  <?php include "components/navbar-blue.php"; ?>
  <!-- ======= Contact Section ======= -->
  <section id="redes" class="redes">
    <div class="container">

      <div class="section-header">
        <h2>Busque em uma de nossas redes</h2>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 gx-lg-5 justify-content-center">
        <div class="col-xl-4 col-md-6">
          <div class="rede-item">
            <div class="img" style="background-image: url('assets/img/logo.jpg');">
            </div>
            <div class="details position-relative">
              <a class="stretched-link">
                <h3>REDE CENTROCARD</h3>
              </a>
              <p>Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.</p>
              <button class="btn btn-primary">Buscar <i class="bi bi-search"></i></button>
              <p class="pt-2 p-disponivel">Disponível em: Plano Gold e Essencial</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="rede-item">
            <div class="img" style="background-image: url('assets/img/tem-saude.png');">
            </div>
            <div class="details position-relative">
              <a  class="stretched-link">
                <h3>REDE NACIONAL</h3>
              </a>
              <p>Realize consultas médicas, odontológicas e exames nas melhores clínicas e laboratórios particulares com preços que cabem no seu bolso.</p>
              <button class="btn btn-primary">Buscar <i class="bi bi-search"></i></button>
              <p class="pt-2 p-disponivel">Disponível em: Plano Platinum</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h2>Contato</h2>
        <p>Preencha o formulário abaixo e tenha atendimento especializado</p>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 gx-lg-5 justify-content-center">

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button class="btn" type="submit">Enviar Mensagem</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/filter-services.js"></script>
</body>

</html>