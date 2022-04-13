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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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

  
  <?php include "components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
</body>

</html>