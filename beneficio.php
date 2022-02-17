<?php
require_once './admin/dbconfig.php';
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

$url = explode("/", $_SERVER['REQUEST_URI']);
$idPost = $url[4];

$stmt = $DB_con->prepare("SELECT id,benefit FROM benefits where id='$idPost' ORDER BY id DESC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
  $post = $benefit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $post ?> CENTROCARD SAÚDE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <main>
    <?php
    $stmt = $DB_con->prepare("SELECT * FROM benefits where benefit='$post'");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
    ?>
        <section id="hero2" class="hero2" style="background-image: url('<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_3'] . '') ?>');">
        </section><!-- End Hero Section -->

    <?php
      }
    }
    ?>
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