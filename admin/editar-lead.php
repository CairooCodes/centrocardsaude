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
  $stmt_edit = $DB_con->prepare('SELECT * FROM leads WHERE id =:uid');
  $stmt_edit->execute(array(':uid' => $id));
  $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  extract($edit_row);
} else {
  header("Location: painel-servicos.php");
}

if (isset($_POST['btnsave'])) {

  $status = $_POST['status'];


  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('UPDATE leads SET 
    status=:ustatus
    WHERE id=:uid');
    $stmt->bindParam(':ustatus', $status);
    $stmt->bindParam(':uid', $id);

    if ($stmt->execute()) {
      echo ("<script>window.location = 'painel-leads.php';</script>");
    } else {
      $errMSG = "Erro..";
    }
  }
}
?>
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Editar Leads / Painel Administrativo</title>
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
      <h1>Editar Lead</h1>
      <div class="d-flex justify-content-between">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
            <li class="breadcrumb-item active">Leads</li>
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
                        <input disabled type="text" class="form-control" value="<?php echo $nome; ?>" name="nome" placeholder="Nome Completo">
                        <label for="">Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input disabled type="text" class="form-control" value="<?php echo $whats; ?>" name="whats" placeholder="Nome Completo">
                        <label for="">Número</label>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="form-floating">
                        <input disabled type="text" class="form-control" value="<?php echo $email; ?>" name="email" placeholder="Nome Completo">
                        <label for="">Email</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3">
                        <select name="status" class="form-select" id="floatingSelect" aria-label="Parceiro">
                          <option value="<?php echo $status; ?>">
                            <?php
                            if ($status == 1) {
                              echo "Pendente";
                            }
                            if ($status == 2) {
                              echo "Aprovado";
                            }
                            if ($status == 3) {
                              echo "Não aprovado";
                            }
                            ?> (selecionado)
                          </option>
                          <option value="1">Pendente</option>
                          <option value="2">Aprovado</option>
                          <option value="3">Não aprovado</option>
                        </select>
                        <label for="floatingSelect">Status</label>
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