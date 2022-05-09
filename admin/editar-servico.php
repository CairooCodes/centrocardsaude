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

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
  $id = $_GET['edit_id'];
  $stmt_edit = $DB_con->prepare('SELECT * FROM services WHERE id =:uid');
  $stmt_edit->execute(array(':uid' => $id));
  $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  extract($edit_row);
} else {
  header("Location: painel-servicos.php");
}

if (isset($_POST['btnsave'])) {
  $specialty = $_POST['specialty'];
  $name = $_POST['name'];
  $partner = $_POST['partner'];
  $private = $_POST['private'];
  $centrocard = $_POST['centrocard'];
  $private_status = $_POST['private_status'];
  $type = $_POST['type'];

  if (empty($name)) {
    $errMSG = "Por favor, insira o nome";
  }

  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('UPDATE services SET 
    specialty=:uspecialty,
    name=:uname,
    partner=:upartner,
    private=:uprivate,
    private_status=:uprivate_status,
    centrocard=:ucentrocard,
    type=:utype
    WHERE id=:uid');
    $stmt->bindParam(':uspecialty', $specialty);
    $stmt->bindParam(':uname', $name);
    $stmt->bindParam(':upartner', $partner);
    $stmt->bindParam(':uprivate', $private);
    $stmt->bindParam(':uprivate_status', $private_status);
    $stmt->bindParam(':ucentrocard', $centrocard);
    $stmt->bindParam(':utype', $type);
    $stmt->bindParam(':uid', $id);

    if ($stmt->execute()) {
      echo ("<script>window.location = 'painel-servicos.php';</script>");
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

  <title>Editar Serviço / Painel Administrativo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon-semfundo.png" rel="icon">
  <link href="../assets/img/icon-semfundo.png" rel="apple-touch-icon">

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
      <h1>Editar Serviço</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
          <li class="breadcrumb-item"><a href="painel-servicos.php">Painel Serviços</a></li>
          <li class="breadcrumb-item active">Editar Serviço</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-8">

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
                        <label for="">Nome do Serviço</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating mb-3">
                        <select name="specialty" class="form-select" id="floatingSelect" aria-label="Especialidade">
                          <option value="<?php echo $specialty; ?>"><?php echo $specialty; ?> ( SELECIONADO ) </option> 
                          <?php
                          $stmt = $DB_con->prepare("SELECT * FROM categorys where type='2'");
                          $stmt->execute();
                          if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              extract($row);
                          ?>
                              <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                        <label for="floatingSelect">Especialidade</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select name="partner" class="form-select" id="floatingSelect" aria-label="Parceiro">
                          <option value="<?php echo $partner; ?>"><?php echo $partner; ?></option>
                          <?php
                          $stmt = $DB_con->prepare('SELECT * FROM partners ORDER BY id ASC');
                          $stmt->execute();
                          if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              extract($row);
                          ?>
                              <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                        <label for="floatingSelect">Parceiro</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $private; ?>" name="private" placeholder="Preço Particular">
                        <label for="">Preço Particular</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select name="private_status" class="form-select" id="floatingSelect" aria-label="Exibir preço particular">
                          <option value="<?php echo $private_status; ?>">
                            <?php
                            if ($private_status == 1) {
                              echo "Exibir";
                            }
                            if ($private_status == 2) {
                              echo "Ocultar";
                            } ?> (selecionado)
                          </option>
                          <option value="1">Exibir</option>
                          <option value="2">Ocultar</option>
                        </select>
                        <label for="floatingSelect">Exibir preço particular</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-floating">
                        <input type="text" class="form-control" value="<?php echo $centrocard; ?>" name="centrocard" placeholder="Preço Particular">
                        <label for="">Preço CENTROCARD</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select name="type" class="form-select" id="floatingSelect" aria-label="Parceiro">
                          <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                          <?php
                          $stmt = $DB_con->prepare('SELECT * FROM categorys ORDER BY id ASC');
                          $stmt->execute();
                          if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              extract($row);
                          ?>
                              <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                        <label for="floatingSelect">Tipo</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center pt-2">
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