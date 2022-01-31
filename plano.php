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

  <title>Plano <?php echo $post ?> CENTROCARD SAÚDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $URI->base('/assets/img/icon-semfundo.png') ?>" rel="icon">
  <link href="<?php echo $URI->base('/assets/img/icon-semfundo.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $URI->base('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href="<?php echo $URI->base('/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo $URI->base('/assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <?php include "nav.php"; ?>
  <?php
  if (isset($errMSG)) {
  ?>
    <div class="alert alert-danger container">
      <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
    </div>
  <?php
  }
  ?>
  <?php
  $stmt = $DB_con->prepare("SELECT id, price2, price, name,t1,t2,t3,t4,b1,b2,b3,b4,icon1,icon2,icon3,icon4 FROM plans where name='$post'");
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
  ?>
      <section class="planos container">
        <h1 class="text-center pb-4">Plano <?php echo $name; ?></h1>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>DE R$ <?php echo $price2; ?> POR</h3>
              <h4><sup>R$</sup><?php echo $price; ?><span> / mês</span></h4>
              <ul>
                em 12x no cartão ou R$ 358,80 à vista ou em até 3 parcelas no boleto + taxa de adesão.
              </ul>
              <div class="btn-wrap">
                <a href="<?php echo $URI->base('/plano/' . slugify($name)); ?>" class="btn-buy">Contrate agora</a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="d-flex">
              <div class="icon-plan">
                <img src="<?php echo $URI->base('/admin/uploads/planos/' . $row['icon1'] . '') ?>">
              </div>
              <div>

                <h4><?php echo $t1; ?></h4>
                <?php echo $b1; ?>
              </div>
            </div>
            <div class="d-flex">
              <div class="icon-plan">
                <img src="<?php echo $URI->base('/admin/uploads/planos/' . $row['icon2'] . '') ?>">
              </div>
              <div>

                <h4><?php echo $t2; ?></h4>
                <?php echo $b2; ?>
              </div>
            </div>
            <div class="d-flex">
              <div class="icon-plan">
                <img src="<?php echo $URI->base('/admin/uploads/planos/' . $row['icon3'] . '') ?>">
              </div>
              <div>

                <h4><?php echo $t3; ?></h4>
                <?php echo $b3; ?>
              </div>
            </div>
            <div class="d-flex">
              <div class="icon-plan">
                <img src="<?php echo $URI->base('/admin/uploads/planos/' . $row['icon4'] . '') ?>">
              </div>
              <div>

                <h4><?php echo $t4; ?></h4>
                <?php echo $b4; ?>
              </div>
            </div>
          </div>
        </div>
      </section>

  <?php
    }
  } ?>

</html>