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
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h1>Seu cartão de saúde e benefícios</h1>
          <!-- <h2>We are team of talented designers making websites with Bootstrap</h2> -->
          <a href="#about" class="btn-get-started scrollto">Saiba mais</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  </div>

  <main id="main">
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-2 px-lg-5">
            <h3>O Centrocard Saúde plataforma de saúde e benefícios</h3>
            <p>Muito mais que um cartão de desconto, nossa solução é um programa de benefícios e proteção que oferece descontos em consultas e exames, telemedicina 24 horas e muitas vantagens. </p>
            <div class="col-md-5">
              <a href="#about" class="btn-about scrollto">Contrate agora</a>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Solução inteligente em saúde e benefícios</h2>
        </div>
        <p>Nossos planos oferecem uma solução completa em saúde, benefícios e proteção, com médico 24 horas por dia através da telemedicina, descontos de até 70% em consultas, exames e até hospitais e programa completo de proteção.</p>
        <h5 class="text-center pt-4">Escolha um plano</h5>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="services-flters">
              <li data-filter="*" class="filter-active">PLATINUM</li>
              <li data-filter=".filter-gold">GOLD</li>
              <li data-filter=".filter-essencial">ESSENCIAL</li>
            </ul>
          </div>
        </div>

        <div class="row justify-content-center services-container">
          <?php
          $stmt = $DB_con->prepare('SELECT id, benefit,description,img_1,plan_1,plan_2 FROM benefits ORDER BY id ASC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>
              <div class="col-lg-4 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                <div class="container-service">
                  <a data-bs-toggle="collapse" href="#collapseExample<?php echo $id; ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $id; ?>">
                    <div class="icon-box">
                      <div class="icon"><img src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>"></div>

                    </div>
                    <div class="container d-flex justify-content-between align-items-center">

                      <div class="title-service text-center text-black pl-2">
                        <h5><?php echo $benefit; ?></h5>
                      </div>
                      <div class="down-service">
                        <i class="bx bx-chevron-down icon-show"></i>
                      </div>
                    </div>
                  </a>
                  <div class="collapse" id="collapseExample<?php echo $id; ?>">
                    <div class="card card-body" style="z-index:2;">
                      <?php echo $description; ?>
                      <div class="btn-wrap">
                        <a href="#" class="btn-service">Saiba mais</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            }
          } ?>
        </div>
      </div>
    </section><!-- End services Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="display-5 fw-bold lh-1 mb-3 pt-4 text-center">OS MELHORES PLANOS</h2>
        </div>

        <div class="row justify-content-center">
          <?php
          $stmt = $DB_con->prepare('SELECT id, name,price,b1,t1,b2,t2,t3,b3 FROM plans ORDER BY id ASC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>

              <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                  <h3><?php echo $name; ?></h3>
                  <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                  <ul>
                    <li><?php echo $t1; ?></li>
                    <li><?php echo $t2; ?></li>
                    <li><?php echo $t3; ?></li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="btn-buy">Saiba mais</a>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->


    <!-- <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Inscreva-se e seja um de nossos afiliados</h2>
          <p>Venha ser um de nossos afiliados e tenha um renda extra</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telefone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section> -->




    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perguntas frequentes</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Pergunta 2 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Pergunta 3 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Pergunta 4 ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Pergunta 5?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <section id="products">
      <div class="container">
        <div class="section-title">
          <h2 class="display-5 fw-bold lh-1 mb-3 pt-4 text-center">Parceiros</h2>
          <!-- <p>Vantagens e descontos exclusivos</p> -->
        </div>
        <div class="carousel-wrap">
          <div class="owl-carousel">
            <?php
            $stmt = $DB_con->prepare('SELECT id, name,img FROM partners ORDER BY id ASC');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="item box">
                  <!-- Badge -->
                  <!-- <div class="badge badge-danger card-badge card-badge-left text-uppercase">
                    -15%
                  </div> -->
                  <div class="card mb-7">
                    <!-- Image -->
                    <div class="card-img">
                      <!-- Image -->
                      <a class="card-img-hover" href="">
                        <img src="<?php echo $URI->base('/admin/uploads/parceiros/' . $row['img'] . '') ?>">
                      </a>
                    </div>
                    <!-- Body -->
                    <div class="card-body px-0">
                      <!-- Category -->
                      <!-- <div class="font-size-xs">
                    <a class="text-muted" href="">categoria</a>
                  </div> -->
                      <!-- Title -->
                      <div class="font-weight-bold">
                        <a class="text-body" href="">

                        </a>
                      </div>
                      <!-- Price -->
                      <div class="font-weight-bold">
                        <span class="text-card-product"> <?php echo $name; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php include "components/footer.php"; ?>

  <!-- <div id="preloader"></div> -->
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
  <script src="./assets/js/filter-services.js"></script>
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
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  </script>
  <script>
    $(document).ready(function() {
      //Select para mostrar e esconder divs
      $('#SelectOptions').on('change', function() {
        var SelectValue = '.' + $(this).val();
        $('.DivPai .Div1').hide();
        $('.DivPai .Div2').hide();
        $(SelectValue).toggle();
      });
    });
  </script>

</body>

</html>