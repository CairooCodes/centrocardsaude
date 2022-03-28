<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();
$dv = $_GET['dv'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CENTROCARD SAÚDE</title>
  <meta name="description" content="CENTROCARD SAÚDE - Solução inteligente em saúde e benefícios" />
  <meta content="CENTROCARD, SAÚDE, Solução inteligente" name="keywords">
  <meta property="og:title" content="CENTROCARD SAÚDE" />
  <meta property="og:url" content="https://centrocardsaude.com.br/" />
  <meta property="og:image" content="https://centrocardsaude.com.br/assets/img/logo.jpg" />

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php include "components/navbar-blue.php"; ?>

  <!-- ======= Hero Section ======= -->

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
          <form action="" method="POST" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
              <input size="20" maxlength="14" type="tel" class="form-control" name="whats" placeholder="Seu número" required>
            </div>
            <div class="col-md-12 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="msg" rows="3" placeholder="Esreva sua mensagem"></textarea>
          </div>
          <input type="hidden" name="tipo" value="1">
          <input type="hidden" name="dv" value="<?php echo $dv; ?> ">
          <div class="text-center pt-3">
            <button type="submit" class="btn" name="submit">Enviar</button>
          </div>
        </form>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/filter-services.js"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 50,
      nav: true,
      navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
      ],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 5
        }
      }
    })
  </script>
</body>

</html>