<?php
require_once './admin/dbconfig.php';
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

$url = explode("/", $_SERVER['REQUEST_URI']);
$idPost = $url[3];

$stmt = $DB_con->prepare("SELECT id,benefit,slug,title_desc FROM benefits where slug='$idPost' ORDER BY id DESC");
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  extract($row);
  $post = $benefit;
  $slug2 = $slug;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $post ?> CENTROCARD SAÚDE</title>
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
  <link href="<?php echo $URI->base('/assets/css/variables.css') ?>" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">
</head>

<body>
  <?php include "components/navbar-blue.php"; ?>
  <main>
    <?php
    $stmt = $DB_con->prepare("SELECT * FROM benefits where slug='$slug2'");
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
    ?>
        <section id="hero2" class="hero2" style="background-image: url('<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_3'] . '') ?>');">
        </section><!-- End Hero Section -->
        <div class="container pt-4 info-benefit">
          <div class="col-md-6">
            <p class="lead"><?php echo $description; ?> </p>
            <h4 class="pt-4 text-uppercase"><?php echo $title_desc; ?>
            </h4>
            <div class="row align-items-center pt-4">
              <div class="col-3 col-md-2">
                <div class="icon-benefit">
                  <img class="img-fluid" src="<?php echo $URI->base('/admin/uploads/beneficios/' . $row['img_1'] . '') ?>">
                </div>
              </div>
              <div class="col-12 col-md-10 pt-2">
                <h5><?php echo $title_s1; ?></h5>
                <p class="lead"><?php echo $service_1; ?></p>
                <h5><?php echo $title_s2; ?></h5>
                <p class="lead"><?php echo $service_2; ?></p>
                <h5><?php echo $title_s3; ?></h5>
                <p class="lead"><?php echo $service_3; ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container box-benefift d-md-block d-none">
          <div class="col-10">
            <h3><?php echo $title_box; ?>:</h3>
            <h4 class="pt-4">LIGUE AGORA</h4>
            <h3><i class="bi bi-whatsapp"></i> <?php echo $contact_box; ?></h3>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </main>
  <?php include "components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
</body>

</html>