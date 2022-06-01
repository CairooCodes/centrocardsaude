<?php
require_once './admin/dbconfig.php';
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

if (isset($_GET['dv'])) { //existe source?
  $dv = $_GET['dv'];
  $url_parts = explode("/", $dv);
  $url_dv = $url_parts[count($url_parts) - 2];
}

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="<?php echo $URI->base('/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/css/variables.css') ?>" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">
</head>

<body>
  <?php include "components/navbar-blue.php"; ?>

  <?php
  $stmt = $DB_con->prepare("SELECT * FROM plans where name='$post'");
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
  ?>
      <section class="pricing container-fluid" style="padding-top:150px;">
        <div class="row justify-content-center">
          <div class="col-lg-3">
            <?php if ($name == 'Essencial') { ?>
              <div>
                <div class="pricing-item">

                  <div class="pricing-header">
                    <h3><?php echo $name; ?></h3>
                    <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                  </div>
                  <ul>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t4; ?></span></li>
                  </ul>

                  <div class="text-center mt-auto">
                    <a href="<?php
                              if ($dv != '') {
                                if (isset($dv)) {
                                  $stmt = $DB_con->prepare("SELECT * FROM users where login='$url_dv'");
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

                              ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>
                  <a class="text-center pt-2" href="<?php echo $URI->base('/docs/CONTRATO_CENTROCARD_PLANO ESSENCIAL_PF.pdf') ?>" target="_blank">CONTRATO PLANO ESSENCIAL</a>
                </div>
              </div><!-- End Pricing Item -->
            <?php
            }
            ?>
            <?php if ($name == 'Platinum') { ?>
              <div>
                <div class="pricing-item featured">

                  <div class="pricing-header">
                    <h3><?php echo $name; ?></h3>
                    <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                  </div>

                  <ul>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t4; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t5; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t6; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t7; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t8; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t9; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t10; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t11; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t12; ?></span></li>
                  </ul>
                  <div class="text-center mt-auto">
                    <a href="<?php
                              if ($dv != '') {
                                if (isset($dv)) {
                                  $stmt = $DB_con->prepare("SELECT * FROM users where login='$url_dv'");
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

                              ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>
                  <a class="text-center pt-2" href="<?php echo $URI->base('/docs/CONTRATO_CENTROCARD_PLANO PLATINUM_PF.pdf') ?>" target="_blank">CONTRATO PLANO PLATINUM</a>
                </div>
              </div><!-- End Pricing Item -->
            <?php
            }
            ?>
            <?php if ($name == 'Gold') { ?>
              <div>
                <div class="pricing-item">
                  <div class="pricing-header">
                    <h3><?php echo $name; ?></h3>
                    <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
                  </div>
                  <ul>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t1; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t2; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t3; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t4; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t5; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t6; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t7; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t8; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t9; ?></span></li>
                    <li><i class="bi bi-dot"></i> <span><?php echo $t10; ?></span></li>
                  </ul>

                  <div class="text-center mt-auto">
                    <a href="<?php
                              if ($dv != '') {
                                if (isset($dv)) {
                                  $stmt = $DB_con->prepare("SELECT * FROM users where login='$url_dv'");
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

                              ?>" class="buy-btn">COMPRE AGORA</a>
                  </div>
                  <a class="text-center pt-2" href="<?php echo $URI->base('/docs/CONTRATO_CENTROCARD_PLANO GOLD_PF.pdf') ?>" target="_blank">CONTRATO PLANO GOLD</a>
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
                <!-- <div class="text-center p-4">
                  <h5 class="lead">
                    Pronto Atendimento em Clínica Médica 24 horas
                  </h5>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Acesse aqui a telemedicina</a>
                  </div>
                </div> -->
              <?php } ?>
              <?php if ($post == 'Platinum') { ?>
                <!-- <div class="text-center p-4">
                  <h5 class="lead">
                    Atendimento em Clínica Médica e Pediatria
                  </h5>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Acesse aqui a telemedicina</a>
                  </div>
                  <div class="text-center mt-auto">
                    <a href="<?php echo $URI->base('/admin/login.php') ?>" class="buy-btn2">Agendamento de especialidades médicas </a>
                  </div>
                </div> -->
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
                      <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                        <div class="service-item">
                          <div class="row justify-content-center">
                            <div class="img-services col-md-11">
                              <img data-src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>" class="img-fluid lazy">
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
                              <a href="<?php echo $URI->base('beneficio/' . slugify($slug)); ?>" class="fw-bolder">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Service Item -->
                    <?php
                    }
                  }
                }
                if ($post == 'Gold') {
                  $stmt = $DB_con->prepare("SELECT id, benefit,description,img_1,plan_1,plan_2,img_2,slug FROM benefits where plan_1 = 'gold' or plan_1= 'essencial'");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                    ?>
                      <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                        <div class="service-item">
                          <div class="row justify-content-center">
                            <div class="img-services col-md-11">
                              <img data-src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>" class="img-fluid lazy">
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
                              <a href="<?php echo $URI->base('beneficio/' . slugify($slug)); ?>" class="fw-bolder">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div><!-- End Service Item -->
                    <?php
                    }
                  }
                }
                if ($post == 'Essencial') {
                  $stmt = $DB_con->prepare("SELECT id, benefit,description,img_1,plan_1,plan_2,img_2,slug FROM benefits where plan_1 = 'essencial'");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                    ?>
                      <div class="col-xl-4 col-md-6 services-item filter-<?php echo $plan_1; ?> filter-<?php echo $plan_2; ?>">
                        <div class="service-item">
                          <div class="row justify-content-center">
                            <div class="img-services col-md-11">
                              <img data-src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_2'] . '') ?>" class="img-fluid lazy">
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
                              <a href="<?php echo $URI->base('beneficio/' . slugify($slug)); ?>" class="fw-bolder">Saiba Mais <i class="bi bi-arrow-right"></i></a>
                            </div>
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
  <?php include "components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/js/loadlazy.js') ?>"></script>
</body>

</html>