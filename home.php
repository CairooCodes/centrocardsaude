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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/variables.css" rel="stylesheet">

  <!-- CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/filter-services.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <?php include "components/navbar.php"; ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <?php
      $stmt = $DB_con->prepare('SELECT * FROM banners ORDER BY id ASC');
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
      ?>
          <div class="carousel-item 
        <?php if ($type == '1') {
            echo 'active';
          } ?>">
            <img data-src="./admin/uploads/banners/<?php echo $row['img_1']; ?>" class="img-fluid lazy banners-main">
            <div class="container">
              <div class="row justify-content-center gy-6">
                <div class="col-lg-9 text-center">
                  <h2><?php echo $name; ?></h2>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                  <p><?php echo $description; ?></p>
                </div>
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
      <div class="container content-cta">

        <div class="row g-5">

          <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
            <h3>Solução inteligente em saúde e benefícios</h3>
            <p>Nossos planos oferecem uma solução completa em saúde, benefícios e proteção, oferecendo médico online 24 horas, rede de descontos em saúde, desconto farmácia, seguros e vários outros benefícios para você, sua família ou sua empresa.</p>
            <a class="cta-btn align-self-start" href="#">Conheça agora</a>
          </div>

          <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">

            <img data-src="assets/img/cards.png" alt="" class="img-fluid lazy">

          </div>

        </div>

      </div>
    </section><!-- End Call To Action Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-header">
          <h2>Nossos planos</h2>
          <p>Solução completa em saúde, benefícios e proteção</p>
        </div>

        <div class="row gy-4">
          <?php
          $stmt = $DB_con->prepare("SELECT * FROM plans where active='1'");
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
              $name2 = $name;
          ?>
              <div class="col-lg-4">
                <div class="pricing-item featured">

                  <div class="pricing-header">
                    <h3>Plano <?php echo $name2; ?></h3>
                    <?php if ($price != '') { ?>
                      <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                    <?php  } else { ?>
                      <h4>Grátis</h4>
                    <?php  } ?>
                  </div>
                  <ul>
                    <?php if ($t1 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                    <?php  } ?>
                    <?php if ($t2 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                    <?php  } ?>
                    <?php if ($t3 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                    <?php  } ?>
                    <?php if ($t4 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t4; ?></span></li>
                    <?php  } ?>
                    <?php if ($t5 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t5; ?></span></li>
                    <?php  } ?>
                    <?php if ($t6 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t6; ?></span></li>
                    <?php  } ?>
                    <?php if ($t7 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t7; ?></span></li>
                    <?php  } ?>
                    <?php if ($t9 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t9; ?></span></li>
                    <?php  } ?>
                    <?php if ($t10 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t10; ?></span></li>
                    <?php  } ?>
                    <?php if ($t11 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t11; ?></span></li>
                    <?php  } ?>
                    <?php if ($t12 != '') { ?>
                      <li><i class="bi bi-dot"></i> <span><?php echo $t12; ?></span></li>
                    <?php  } ?>
                    <div class="text-center mt-auto">
                      <a href="<?php
                                if ($dv != '') {
                                  if (isset($dv)) {
                                    $stmt = $DB_con->prepare("SELECT * FROM users where id='$dv'");
                                    $stmt->execute();
                                    if ($stmt->rowCount() > 0) {
                                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        extract($row);
                                        $link;
                                      }
                                    }
                                  }
                                  echo $link;
                                } else {
                                  echo "https://mobi4tech.com.br/seg4tech/centrocard/centrocardloja/index.php?dia=30&cv=3&gr=1&op=2";
                                }

                                ?>" class="buy-btn"><?php echo $btn_home_text ?></a>
                    </div>
                  </ul>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('plano/' . slugify($name)); ?>" class="buy-btn2">Saiba Mais</a>
                  </div>

                </div>
              </div><!-- End Pricing Item -->
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-header">
          <h2>Benefícios</h2>
          <p>Os melhores benefícios pra você e sua família.</p>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="services-flters">
              <li data-filter="*" class="filter-active">PLATINUM</li>
              <li data-filter=".filter-gold">GOLD</li>
              <li data-filter=".filter-essencial">FÁCIL</li>
            </ul>
          </div>
        </div>
        <div class="row gy-5 services-container mt-2">
          <?php
          $stmt = $DB_con->prepare('SELECT id, benefit,description,img_1,plan_1,plan_2,img_2,slug FROM benefits ORDER BY id ASC');
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>

              <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                <div class="service-item">
                  <div class="row justify-content-center">
                    <div class="img-services col-md-11">
                      <img data-src="./admin/uploads/beneficios/<?php echo $row['img_2']; ?>" class="img-fluid lazy">
                    </div>
                  </div>
                  <div class="details position-relative">
                    <div class="icon">
                      <img class="img-fluid" src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                    </div>
                    <a href="<?php echo $URI->base('beneficio/' . slugify($slug)); ?>" class="stretched-link">
                      <h3><?php echo $benefit; ?></h3>
                    </a>
                    <p><?php echo $description; ?></p>
                    <div class="text-center mt-auto">
                      <a href="<?php echo $URI->base('beneficio/' . slugify($slug)); ?>" class="btn-benefit">Saiba Mais <i class="bi bi-arrow-right"></i></a>
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
      <div class="container">
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
                  <img data-src="./admin/uploads/parceiros/<?php echo $row['img']; ?>" class="img-fluid lazy">

                  <a href="#parceiro-<?php echo $name; ?>" id="popup" class="jsModalTrigger">
                    <!-- <center> <button class="btn-saiba-mais btn" type="button" id="popup" class="jsModalTrigger">
                        Saiba Mais
                      </button>
                    </center> -->
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
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>



  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/filter-services.js"></script>
  <script src="assets/js/loadlazy.js"></script>
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