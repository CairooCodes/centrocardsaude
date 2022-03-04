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
  <section id="hero4" class="hero4" style="background-image: url('<?php echo $URI->base('/assets/img/topo-programa-afiliados.png') ?>');">
    <div class="container">
      <h2>PROGRAMA DE AFILIADOS</h2>
      <h5>Crie gratuitamente sua conta de afiliado e tenha renda extra</h5>
      <button type="submit" class="btn btn-cred">CADASTRE-SE</button>
    </div>
  </section><!-- End Hero Section -->
  <section id="afiliado" class="section-bg">
    <div class="container">
      <div class="section-header">
        <h2>Muito fácil compartilhar e faturar</h2>
      </div>
      <div class="row gy-5 gx-lg-5 justify-content-center">
        <div class="col-xl-3 col-md-3">
          <div class="afiliado-item">
            <div class="img" style="background-image: url('assets/img/usando-PC-2-1.jpg');">
            </div>
            <div class="details position-relative">
              <h3>Cadastre-se</h3>
              <p>Insira seus dados e começe a fazer parte dos afiliados</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="afiliado-item">
            <div class="img" style="background-image: url('assets/img/Blog-Arquivo-Link-de-Afiliado-720x400px.png');">
            </div>
            <div class="details position-relative">
              <h3>Divulgue seu link</h3>
              <p>Compartilhe seu link, em suas redes sociais para mais chances</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="afiliado-item">
            <div class="img" style="background-image: url('assets/img/Posso-receber-o-beneficioa.jpg');">
            </div>
            <div class="details position-relative">
              <h3>Receba suas recompensas</h3>
              <p>Toda compra realizada pelo seu link gera comissão para você</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-auto">
      <a href="<?php echo $URI->base('/credenciamento') ?>" class="btn-afiliado">CADASTRE-SE AGORA</a>
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