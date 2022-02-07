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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/filter-services.css" rel="stylesheet">
</head>

<body>
  <?php include "components/nav.php"; ?>
  <!-- ======= Hero Section ======= -->
  <section id="parceiro" class="section-bg">
    <div class="container">
      <h1>QUEM PODE SE CREDENCIAR?</h1>
      <section class="parceiro-box">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                <h5><a href="">Médicos e dentistas de todas as especialidades.</a></h5>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-pills"></i></div>
                <h5><a href="">Laboratórios e clínicas preparadas para os mais diversos tipos de exames diagnósticos.</a></h5>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                <h5><a href="">Profissionais de saúde complementar, como psicólogos, fonoaudiólogos, fisioterapeutas, nutricionistas e outros.</a></h5>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="fas fa-building"></i></div>
                <h5><a href="">Empresas que comercializam produtos relacionados à saúde, bem-estar e beleza.</a></h5>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>
  <section id="parceiro-vantagens">
    <div class="container">
      <h1 class="text-center">Vantagens de ser um parceiro CENTROCARD SAÚDE</h1>
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/img/cards.png" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h3><i class="far fa-check-circle"></i> GARANTIA DE RECEBIMENTO.</h3>
          <h3><i class="far fa-check-circle"></i> CONTROLE FINANCEIRO.</h3>
          <h3><i class="far fa-check-circle"></i> SEM BUROCRACIA NA HORA DE ATENDER.</h3>
          <h3><i class="far fa-check-circle"></i> SEM INTERFERÊNCIA NA CONDUTA MÉDICA.</h3>
          <h3><i class="far fa-check-circle"></i> GARANTIA DE RECEBIMENTO.</h3>
          <h3><i class="far fa-check-circle"></i> CONTROLE FINANCEIRO.</h3>
          <a href="credenciamento"><button class="btn btn-vantagens">CADASTRE-SE</button></a>
        </div>
      </div>
    </div>
  </section>

  </main><!-- End #main -->
  <?php include "components/footer.php"; ?>

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>