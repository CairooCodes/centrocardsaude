<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;
error_reporting(~E_ALL); // avoid notice

if (isset($_POST['btnsave'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $price2 = $_POST['price2'];
  $description = $_POST['description'];
  $b1 = $_POST['b1'];
  $b2 = $_POST['b2'];
  $b3 = $_POST['b3'];
  $b4 = $_POST['b4'];
  $b5 = $_POST['b5'];

  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];

  $imgFile2 = $_FILES['user_image2']['name'];
  $tmp_dir2 = $_FILES['user_image2']['tmp_name'];
  $imgSize2 = $_FILES['user_image2']['size'];

  $imgFile3 = $_FILES['user_image3']['name'];
  $tmp_dir3 = $_FILES['user_image3']['tmp_name'];
  $imgSize3 = $_FILES['user_image3']['size'];

  $imgFile4 = $_FILES['user_image4']['name'];
  $tmp_dir4 = $_FILES['user_image4']['tmp_name'];
  $imgSize4 = $_FILES['user_image4']['size'];

  $imgFile5 = $_FILES['user_image5']['name'];
  $tmp_dir5 = $_FILES['user_image5']['tmp_name'];
  $imgSize5 = $_FILES['user_image5']['size'];

  if (empty($name)) {
    $errMSG = "Por favor, insira o nome";
  }

  // if (empty($link)) {
  //   $errMSG = "Por favor Insira o link do banner";
  // }
  else {
    $upload_dir = 'uploads/planos/'; // upload directory
    $imgExt =  strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $imgExt2 =  strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION));
    $imgExt3 =  strtolower(pathinfo($imgFile3, PATHINFO_EXTENSION));
    $imgExt4 =  strtolower(pathinfo($imgFile4, PATHINFO_EXTENSION));
    $imgExt5 =  strtolower(pathinfo($imgFile5, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    // rename uploading image
    $name2 = preg_replace("/\s+/", "", $name);
    $name3 = substr($name2, 0, -1);
    $userpic  = $name3 . "icon1" . "." . $imgExt;
    $userpic2 = $name3 . "icon2" . "." . $imgExt2;
    $userpic3 = $name3 . "icon3" . "." . $imgExt3;
    $userpic4 = $name4 . "icon4" . "." . $imgExt4;
    $userpic5 = $name5 . "icon5" . "." . $imgExt5;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir . $userpic);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
    if (in_array($imgExt2, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize2 < 5000000) {
        move_uploaded_file($tmp_dir2, $upload_dir . $userpic2);
      } else {
        $errMSG = "Imagem 2 muito grande.";
      }
    }
    if (in_array($imgExt3, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize3 < 5000000) {
        move_uploaded_file($tmp_dir3, $upload_dir . $userpic3);
      } else {
        $errMSG = "Imagem 3 muito grande.";
      }
    }
    if (in_array($imgExt4, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize4 < 5000000) {
        move_uploaded_file($tmp_dir4, $upload_dir . $userpic4);
      } else {
        $errMSG = "Imagem 4 muito grande.";
      }
    }
    if (in_array($imgExt5, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize5 < 5000000) {
        move_uploaded_file($tmp_dir5, $upload_dir . $userpic5);
      } else {
        $errMSG = "Imagem 5 muito grande.";
      }
    }
  }
  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('INSERT INTO plans (name,price,price2,description,b1,icon1,b2,icon2,b3,icon3,b4,icon4) VALUES(:uname,:uprice,:uprice2,:udescription,:ub1,:upic,:ub2,:upic2,:ub3,:upic3,:ub4,:upic4)');
    $stmt->bindParam(':uname', $name);
    $stmt->bindParam(':uprice', $price);
    $stmt->bindParam(':uprice2', $price2);
    $stmt->bindParam(':udescription', $description);
    $stmt->bindParam(':ub1', $b1);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':ub2', $b2);
    $stmt->bindParam(':upic2', $userpic2);
    $stmt->bindParam(':ub3', $b3);
    $stmt->bindParam(':upic3', $userpic3);
    $stmt->bindParam(':ub4', $b4);
    $stmt->bindParam(':upic4', $userpic4);

    if ($stmt->execute()) {
      echo ("<script>window.location = 'painel-planos.php';</script>");
    } else {
      $errMSG = "Erro..";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adicionar Plano / Painel Administrativo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/logo-mit.png" rel="icon">
  <link href="../assets/img/logo-mit.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.2/css/fileinput.min.css" integrity="sha512-optaW0zX5RBCFqhNsmzGuHHsD/tdnCcWl8B0OToMY01JVeEcphylF9gCCxpi4BQh0LY47BkJLyNC1J7M5MJMQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Adicionar Plano</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="painel-planos.php">Painel Planos</a></li>
          <li class="breadcrumb-item active">Adicionar Plano</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <?php
              if (isset($errMSG)) {
              ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
              <?php
              }
              ?>
              <!-- Vertical Form -->
              <form method="POST" enctype="multipart/form-data" class="row">
                <div class="col-md-4">
                  <h5 class="card-title">Informações do Banner</h5>
                  <div class="row">
                    <div class="col-md-12 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name"  placeholder="Nome do Plano">
                        <label for="floatingEmail">Nome do Plano</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $price2; ?>" name="price2"  placeholder="Preço do Plano">
                        <label for="floatingPassword">Preço do Plano</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $price; ?>" name="price"  placeholder="Preço do Plano">
                        <label for="floatingPassword">Preço de Venda</label>
                      </div>
                    </div>
                    <div class="col-12 pt-3">
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Descrição do plano" value="<?php echo $description; ?>" name="description" style="height: 100px;"><?php echo $description; ?></textarea>
                        <label for="floatingTextarea">Descrição</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Benefícios</h5>
                  <div class="row">
                    <div class="col-6 pb-2">
                      <div class="file-loading">
                        <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image" accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <textarea class="form-control" value="<?php echo $b1; ?>" name="b1" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Benefício 1</label>
                      </div>
                    </div>
                    <div class="col-6 pb-2">
                      <div class="file-loading">
                        <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image2" accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <textarea class="form-control" value="<?php echo $b2; ?>" name="b2" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Benefício 1</label>
                      </div>
                    </div>
                    <div class="col-6 pb-2">
                      <div class="file-loading">
                        <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image3" accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <textarea class="form-control" value="<?php echo $b3; ?>" name="b3" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Benefício 3</label>
                      </div>
                    </div>
                    <div class="col-6 pb-2">
                      <div class="file-loading">
                        <input id="curriculo" class="file" data-theme="fas" type="file" name="user_image4" accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <textarea class="form-control" value="<?php echo $b4; ?>" name="b4" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Benefício 4</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="btnsave" class="btn btn-primary">Adicionar</button>
                  <button type="reset" class="btn btn-secondary">Resetar</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.2/js/fileinput.min.js" integrity="sha512-OgkQrY08KbdmZRLKrsBkVCv105YJz+HdwKACjXqwL+r3mVZBwl20vsQqpWPdRnfoxJZePgaahK9G62SrY9hR7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>