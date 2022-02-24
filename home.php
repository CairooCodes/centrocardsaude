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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  .carousel-wrap {
    margin-top: 20px;
    padding: 0 5%;
    width: 100%;
    position: relative;
  }

  /* fix blank or flashing items on carousel */
  .owl-carousel .item {
    position: relative;
    z-index: 100;
  }

  /* end fix */
  .owl-nav>div {
    margin-top: -26px;
    position: absolute;
    top: 50%;
    color: #cdcbcd;
  }

  .owl-nav i {
    font-size: 52px;
  }

  .owl-nav .owl-prev {
    left: -30px;
  }

  .owl-nav .owl-next {
    right: -30px;
  }
</style>

<body>
  <?php include "components/navbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <?php
      $stmt = $DB_con->prepare('SELECT id, name,description,img_1,type,add_button,type_button,name_button,url_button FROM banners ORDER BY id ASC');
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
      ?>
          <div class="carousel-item 
        <?php if ($type == '1') {
            echo 'active';
          } ?>" style="background-image: url('./admin/uploads/banners/<?php echo $row['img_1']; ?>');">
            <div class="container">
              <div class="row justify-content-center gy-6">
                <div class="col-lg-9 text-center">
                  <h2><?php echo $name; ?></h2>
                </div>
                <div class="col-md-4 text-center">
                  <p><?php echo $description; ?></p>
                </div>
                <?php if ($add_button == '1') { ?>
                  <?php if ($type_button == 'video') { ?>
                    <div class="col-md-9 text-center">
                      <a href="<?php echo $url_button; ?>" class="glightbox btn-get-started scrollto "><i class="bi bi-play-circle"></i> <?php echo $name_button; ?></a>
                    </div>
                  <?php
                  }
                  ?>
                  <?php if ($type_button == 'padrao') { ?>
                    <div class="col-md-9 text-center">
                      <a href="<?php echo $url_button; ?>" class="btn-get-started scrollto "><?php echo $name_button; ?></a>
                    </div>
                  <?php
                  }
                  ?>
                <?php
                }
                ?>
              </div>
            </div>
          </div><!-- End Carousel Item -->
      <?php
        }
      }
      ?>
    </div>
    <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= Call To Action Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-out">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Solução inteligente em saúde e benefícios</h3>
            <p> Nossos planos oferecem uma solução completa em saúde, benefícios e proteção, , oferecendo desde disponibilidade médica de 24h e rede de descontos em consultas até assistência funeral familiar e nutricional. Saiba qual o plano ideal para você.</p>
            <a class="cta-btn align-self-start" href="#">Conheça agora</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">

            <img src="assets/img/cards.png" alt="" class="img-fluid">

          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nossos planos</h2>
          <p>Solução completa em saúde, benefícios e proteção</p>
        </div>

        <div class="row gy-4">
          <?php
          $stmt = $DB_con->prepare('SELECT id, name,price,b1,t1,b2,t2,t3,t4,t5,t6,t12,t11 FROM plans');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>
              <?php if ($name == 'Essencial') { ?>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pricing-item">

                    <div class="pricing-header">
                      <h3><?php echo $name; ?></h3>
                      <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                    </div>
                    <ul>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Assistência Farmacêutica </span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Assistência Personal Fitness</span></li>
                    </ul>

                    <div class="text-center mt-auto">
                      <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">Saiba Mais</a>
                    </div>

                  </div>
                </div><!-- End Pricing Item -->
              <?php
              }
              ?>
              <?php if ($name == 'Platinum') { ?>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pricing-item featured">

                    <div class="pricing-header">
                      <h3><?php echo $name; ?></h3>
                      <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                    </div>

                    <ul>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t5; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t6; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t12; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t11; ?></span></li>
                    </ul>
                    <div class="text-center mt-auto">
                      <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">Saiba Mais</a>
                    </div>

                  </div>
                </div><!-- End Pricing Item -->
              <?php
              }
              ?>
              <?php if ($name == 'Gold') { ?>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
                  <div class="pricing-item">

                    <div class="pricing-header">
                      <h3><?php echo $name; ?></h3>
                      <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                    </div>

                    <ul>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t5; ?></span></li>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t6; ?></span></li>
                      <li class="na"><i class="bi bi-x"></i> <span>Conta Saúde </span></li>
                      <li class="na"><i class="bi bi-x"></i> <span> Especialidades Médicas</span></li>
                    </ul>

                    <div class="text-center mt-auto">
                      <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">Saiba Mais</a>
                    </div>

                  </div>
                </div><!-- End Pricing Item -->
              <?php
              }
              ?>
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Benefícios</h2>
          <p>Os melhores benefícios pra você e sua família.</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="services-flters">
              <li data-filter="*" class="filter-active">PLATINUM</li>
              <li data-filter=".filter-gold">GOLD</li>
              <li data-filter=".filter-essencial">ESSENCIAL</li>
            </ul>
          </div>
        </div>
        <div class="row gy-5 services-container mt-2">
          <?php
          $stmt = $DB_con->prepare('SELECT id, benefit,description,img_1,plan_1,plan_2,img_2 FROM benefits ORDER BY id ASC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>

              <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                <div class="service-item">
                  <div class="img" style="background-image: url('./admin/uploads/beneficios/<?php echo $row['img_2']; ?>');">
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <img src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                    </div>
                    <a href="<?php echo $URI->base('/beneficio/' . slugify($id)); ?>" class="stretched-link">
                      <h3><?php echo $benefit; ?></h3>
                    </a>
                    <p><?php echo $description; ?></p>
                    <div class="text-center mt-auto">
                      <a href="<?php echo $URI->base('/beneficio/' . slugify($id)); ?>" class="btn-benefit">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div><!-- End Service Item -->
          <?php
            }
          } ?>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">
        <div class="carousel-wrap clients-slider">
          <div class="owl-carousel">
            <?php
            $stmt = $DB_con->prepare('SELECT id, name,img FROM partners ORDER BY id ASC');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="item">
                  <img src="<?php echo $URI->base('/admin/uploads/parceiros/' . $row['img'] . '') ?>" class="img-fluid" alt="">
                  <a href="#parceiro-<?php echo $name; ?>" id="popup" class="jsModalTrigger">
                    <center> <button class="btn-saiba-mais btn" type="button" id="popup" class="jsModalTrigger">
                        Saiba Mais
                      </button>
                    </center>
                  </a>
                  <div class="collapse" id="collapseExample<?php echo $id; ?>">
                    <div class="card card-body">
                      <?php echo $name; ?>
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
      <?php
      $stmt = $DB_con->prepare('SELECT * FROM partners ORDER BY id ASC');
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
      ?>
          <div id="parceiro-<?php echo $name; ?>" class="modal2">
            <div class="modal__overlay jsOverlay"></div>
            <div class="modal__container">
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo $URI->base('/admin/uploads/parceiros/' . $row['img'] . '') ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                  <h5>Contatos</h5>
                  <p> <?php echo $esp_1; ?></p>
                </div>
              </div>
              <button class="modal__close jsModalClose">&#10005;</button>
            </div>
          </div>
      <?php
        }
      } ?>
    </section><!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blog</h2>
          <p>Postagens recentes</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Seg, Fev 14</span>
                <span class="post-author"> / Cairo Felipe</span>
              </div>
              <h3 class="post-title">Dicas para começar o dia bem</h3>
              <p>Conheça as principais dicas dos nossos especialista para começar um dia bem</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Saiba Mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Seg, Fev 14</span>
                <span class="post-author"> / Cairo Felipe</span>
              </div>
              <h3 class="post-title">Cuide de sua saúde mental, visite um psicólogo</h3>
              <p>Cuidar da saúde mental evita o desencadeamento de diversas doenças, como depressão e ansiedade. Confira como promover esse cuidado e ter mais qualidade de vida</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Saiba Mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="600">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Seg, Fev 14</span>
                <span class="post-author"> / Cairo Felipe</span>
              </div>
              <h3 class="post-title">Vantagens do home office</h3>
              <p>Veja como o home office traz vantagens a empresas e trabalhadores, como diminuição de custos, mais produtividade e qualidade de vida</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Saiba Mais</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
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
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

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