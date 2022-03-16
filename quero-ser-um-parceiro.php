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

  <title>PARCEIRO CENTROCARD SAÚDE</title>
  <meta name="description" content="CENTROCARD SAÚDE - Solução inteligente em saúde e benefícios" />
  <meta content="CENTROCARD, SAÚDE, Solução inteligente" name="keywords">
  <meta property="og:title" content="CENTROCARD SAÚDE" />
  <meta property="og:url" content="https://centrocardsaude.com.br/" />
  <meta property="og:image" content="https://centrocardsaude.com.br/assets/img/logo.jpg" />
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

<body>
  <?php include "components/navbar-blue.php"; ?>
  <!-- ======= Hero Section ======= -->
  <section id="parceiro" class="section-bg">
    <div class="container">
      <div class="section-header">
        <h2>Seja nosso credenciado!</h2>
        <p>Venha fazer parte do nosso sistema de saúde inteligente e receba seus pagamentos à vista com toda segurança. Veja quem pode se credenciar:</p>
      </div>
      <div class="row gy-5 gx-lg-5 justify-content-center">
        <div class="col-xl-3 col-md-3">
          <div class="cred-item">
            <div class="img" style="background-image: url('assets/img/medicos.jpg');">
            </div>
            <div class="d-flex align-items-center details position-relative">
              <p>Médicos e dentistas de todas as especialidades.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="cred-item">
            <div class="img" style="background-image: url('assets/img/laboratorios.jpg');">
            </div>
            <div class="d-flex align-items-center  algim-itens-center details position-relative">
              <p>Laboratórios e clínicas preparadas para os mais diversos tipos de exames diagnósticos.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="cred-item">
            <div class="img" style="background-image: url('assets/img/gallery-5.jpg');">
            </div>
            <div class="d-flex align-items-center  algim-itens-center details position-relative">
              <p>Profissionais de saúde complementar, como psicólogos, fonoaudiólogos e outros.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="cred-item">
            <div class="img" style="background-image: url('assets/img/gallery-7.jpg');">
            </div>
            <div class="d-flex align-items-center  algim-itens-center details position-relative">
              <p>Empresas que comercializam produtos relacionados à saúde, bem-estar e beleza.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-auto">
      <a href="<?php echo $URI->base('/credenciamento') ?>" class="btn-parceiro">CADASTRE-SE AGORA</a>
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