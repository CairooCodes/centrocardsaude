<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;
error_reporting(~E_ALL);


if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  $stmt_edit = $DB_con->prepare('SELECT * FROM plans WHERE id =:uid');
  $stmt_edit->execute(array(':uid' => $id));
  $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  extract($edit_row);
} else {
  header("Location: painel-planos.php");
}

if (isset($_POST['btnsave'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $price2 = $_POST['price2'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $t1 = $_POST['t1'];
  $t2 = $_POST['t2'];
  $t3 = $_POST['t3'];
  $t4 = $_POST['t4'];
  $t5 = $_POST['t5'];
  $t6 = $_POST['t6'];
  $t7 = $_POST['t7'];
  $t8 = $_POST['t8'];
  $t9 = $_POST['t9'];
  $t10 = $_POST['t10'];
  $t11 = $_POST['t11'];
  $t12 = $_POST['t12'];
  $t13 = $_POST['t13'];
  $t14 = $_POST['t14'];
  $t15 = $_POST['t15'];


  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('UPDATE plans SET 
    name=:uname,
    price=:uprice,
    price2=:uprice2,
    description=:udescription,
    link=:ulink,
    t1=:ut1,
    t2=:ut2,
    t3=:ut3,
    t4=:ut4,
    t5=:ut5,
    t6=:ut6,
    t7=:ut7,
    t8=:ut8,
    t9=:ut9,
    t10=:ut10,
    t11=:ut11,
    t12=:ut12,
    t13=:ut13,
    t14=:ut14,
    t15=:ut15
    WHERE id=:uid');
    $stmt->bindParam(':uname', $name);
    $stmt->bindParam(':uprice', $price);
    $stmt->bindParam(':uprice2', $price2);
    $stmt->bindParam(':udescription', $description);
    $stmt->bindParam(':ulink', $link);
    $stmt->bindParam(':ut1', $t1);
    $stmt->bindParam(':ut2', $t2);
    $stmt->bindParam(':ut3', $t3);
    $stmt->bindParam(':ut4', $t4);
    $stmt->bindParam(':ut5', $t5);
    $stmt->bindParam(':ut6', $t6);
    $stmt->bindParam(':ut7', $t7);
    $stmt->bindParam(':ut8', $t8);
    $stmt->bindParam(':ut9', $t9);
    $stmt->bindParam(':ut10', $t10);
    $stmt->bindParam(':ut11', $t11);
    $stmt->bindParam(':ut12', $t12);
    $stmt->bindParam(':ut13', $t13);
    $stmt->bindParam(':ut14', $t14);
    $stmt->bindParam(':ut15', $t15);
    $stmt->bindParam(':uid', $id);

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

  <title>Editar Plano / Painel Administrativo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon-semfundo.png" rel="icon">
  <link href="../assets/img/icon-semfundo.png" rel="apple-touch-icon">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
</head>

<body>
  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Editar Plano</h1>
      <div class="d-flex justify-content-between">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
            <li class="breadcrumb-item"><a href="painel-planos.php">Planos</a></li>
            <li class="breadcrumb-item active">Editar Plano</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row justify-content-center">
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
                <div class="col-md-12">
                  <h5 class="card-title">Informações</h5>
                  <div class="row">
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" placeholder="Nome Completo">
                        <label for="">Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $price; ?>" name="price" placeholder="Preço de venda">
                        <label for="">Preço de venda</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $price2; ?>" name="price2" placeholder="Preço de venda">
                        <label for="">Preço de compra</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $url; ?>" name="url" placeholder="Url de pagamento">
                        <label for="">Url de pagamento</label>
                      </div>
                    </div>
                  </div>
                  <h5 class="card-title">Destaques</h5>
                  <div class="row">
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t1; ?>" name="t1" placeholder="Destaque 1">
                        <label for="">Destaque 1</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t2; ?>" name="t2" placeholder="Destaque 2">
                        <label for="">Destaque 2</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t3; ?>" name="t3" placeholder="Destaque 3">
                        <label for="">Destaque 3</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t4; ?>" name="t4" placeholder="t4">
                        <label for="">Url de pagamento</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t5; ?>" name="t5" placeholder="Destaque 5">
                        <label for="">Destaque 5</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t6; ?>" name="t6" placeholder="Destaque 6">
                        <label for="">Destaque 6</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <div class="form-floating">
                          <input type="text" class="form-control" value="<?php echo $t7; ?>" name="t7" placeholder="Destaque 7">
                          <label for="">Destaque 7</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t8; ?>" name="t8" placeholder="Destaque 8">
                        <label for="">Destaque 8</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t9; ?>" name="t9" placeholder="Destaque 9">
                        <label for="">Destaque 9</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t10; ?>" name="t10" placeholder="Destaque 10">
                        <label for="">Destaque 10</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t11; ?>" name="t11" placeholder="Destaque 11">
                        <label for="">Destaque 11</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $t12; ?>" name="t12" placeholder="Destaque 12">
                        <label for="">Destaque 12</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="text-center pt-2 mb-4">
              <button type="submit" name="btnsave" class="btn btn-primary">Editar</button>
            </div>
            </form><!-- Vertical Form -->

          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include "components/footer.php"; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>