<?php
require_once './admin/dbconfig.php';
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

$url = explode("/", $_SERVER['REQUEST_URI']);
$idPost = $url[3];

$stmt = $DB_con->prepare("SELECT name FROM plans where name='$idPost' ORDER BY id DESC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
  $post = $name;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PLANO <?php echo $post ?> CENTROCARD SAÚDE</title>
  <meta name="description" content="CENTROCARD SAÚDE - Solução inteligente em saúde e benefícios" />
  <meta content="CENTROCARD, SAÚDE, Solução inteligente" name="keywords">
  <meta property="og:title" content="CENTROCARD SAÚDE" />
  <meta property="og:url" content="https://centrocardsaude.com.br/" />
  <meta property="og:image" content="https://centrocardsaude.com.br/assets/img/logo.jpg" />
  <!-- Favicons -->
  <link href="<?php echo $URI->base('/assets/img/icon-semfundo.png') ?>" rel="icon">
  <link href="<?php echo $URI->base('/assets/img/icon-semfundo.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
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

  <?php
  $stmt = $DB_con->prepare("SELECT id, price2, price, name,t1,t2,t3,t4,b1,b2,b3,b4,icon1,icon2,icon3,icon4,t5,t6,t7,t8,b5,b6,b7,b8,icon5,icon6,icon7,icon8,t9,t10,t11,t12,b9,b10,b11,b12,icon9,icon10,icon11,icon12 FROM plans where name='$post'");
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
  ?>
      <section class="pricing container-fluid" style="padding-top:150px;">
        <div class="row justify-content-center">
          <div class="col-lg-3">
            <?php if ($name == 'Essencial') { ?>
              <div data-aos="zoom-in" data-aos-delay="200">
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
                    <div class="text-center mt-auto">
                      <a href="#" class="buy-btn2">Compre agora</a>
                    </div>
                  </ul>

                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>

                </div>
              </div><!-- End Pricing Item -->
            <?php
            }
            ?>
            <?php if ($name == 'Platinum') { ?>
              <div data-aos="zoom-in" data-aos-delay="400">
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
                    <div class="text-center mt-auto">
                      <a href="#" class="buy-btn2">Compre agora</a>
                    </div>
                  </ul>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>

                </div>
              </div><!-- End Pricing Item -->
            <?php
            }
            ?>
            <?php if ($name == 'Gold') { ?>
              <div data-aos="zoom-in" data-aos-delay="600">
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
                    <div class="text-center mt-auto">
                      <a href="#" class="buy-btn2">Compre agora</a>
                    </div>
                  </ul>

                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>

                </div>
              </div><!-- End Pricing Item -->
            <?php
            }
            ?>
          </div>
          <div class="col-lg-9">
            <div id="services" class="services">
              <div class="section-header pt-4" style="padding-bottom:0%">
                <h2>Benefícios</h2>
              </div>
              <?php if (($post == 'Essencial') or  ($post == 'Gold')) { ?>
                <div class="text-center p-4">
                  <h5 class="lead">
                    Pronto Atendimento em Clínica Médica 24 horas
                  </h5>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Acesse aqui a telemedicina</a>
                  </div>
                </div>
              <?php } ?>
              <?php if ($post == 'Platinum') { ?>
                <div class="text-center p-4">
                  <h5 class="lead">
                    Atendimento em Clínica Médica e Pediatria
                  </h5>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Acesse aqui a telemedicina</a>
                  </div>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Agendamento de especialidades médicas  </a>
                  </div>
                </div>
              <?php } ?>
              <div class="row gy-5 services-container">

                <?php

                if ($post == 'Platinum') {
                  $stmt = $DB_con->prepare("SELECT id, benefit,description,img_1,plan_1,plan_2,img_2,slug FROM benefits");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                ?>
                      <div class="col-xl-4 col-md-6 services-item">
                        <div class="service-item">
                          <div class="img" style="background-image: url('<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>');">
                          </div>
                          <div class="details2 position-relative">
                            <div class="icon">
                              <img class="img-fluid" src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                            </div>
                            <a href="#" class="stretched-link">
                              <h3><?php echo $benefit; ?></h3>
                            </a>
                            <p><?php echo $description; ?></p>
                            <div class="text-center mt-auto">
                              <a href="<?php echo $slug; ?>" class="btn-benefit">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Service Item -->
                    <?php
                    }
                  }
                }
                if ($post == 'Gold') {
                  $stmt = $DB_con->prepare("SELECT id, benefit,description,img_1,plan_1,plan_2,img_2 FROM benefits where plan_1 = 'gold' or plan_1= 'essencial'");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                    ?>

                      <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                        <div class="service-item">
                          <div class="img" style="background-image: url('<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>');">
                          </div>
                          <div class="details position-relative">
                            <div class="icon">
                              <img class="img-fluid" src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                            </div>
                            <a href="#" class="stretched-link">
                              <h3><?php echo $benefit; ?></h3>
                            </a>
                            <p><?php echo $description; ?></p>
                          </div>
                        </div>
                      </div><!-- End Service Item -->
                    <?php
                    }
                  }
                }
                if ($post == 'Essencial') {
                  $stmt = $DB_con->prepare("SELECT id, benefit,description,img_1,plan_1,plan_2,img_2 FROM benefits where plan_1 = 'essencial'");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                    ?>

                      <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                        <div class="service-item">
                          <div class="img" style="background-image: url('<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>');">
                          </div>
                          <div class="details position-relative">
                            <div class="icon">
                              <img class="img-fluid" src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                            </div>
                            <a href="#" class="stretched-link">
                              <h3><?php echo $benefit; ?></h3>
                            </a>
                            <p><?php echo $description; ?></p>
                          </div>
                        </div>
                      </div><!-- End Service Item -->
                <?php
                    }
                  }
                }

                ?>
              </div>
            </div>

          </div>
        </div>
      </section>
  <?php
    }
  } ?>
  </main>
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