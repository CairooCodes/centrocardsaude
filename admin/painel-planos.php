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

if (isset($_GET['delete_id'])) {
  // it will delete an actual record from db
  $stmt_delete = $DB_con->prepare('DELETE FROM plans WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_id']);
  $stmt_delete->execute();

  header("Location: painel-planos.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Planos / Painel Administrativo</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
      <h1>Planos</h1>
      <div class="d-flex justify-content-between">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Planos</li>
          </ol>
        </nav>
        <?php
        if ($_SESSION['type'] == 1) {
        ?>
          <a href="add-plano.php">
            <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Adicionar Plano</button>
          </a>
        <?php } ?>
      </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <?php
        $stmt = $DB_con->prepare('SELECT * FROM plans ORDER BY id DESC');
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center"><?php echo $name; ?></h5>
                  <div class="row">
                    <div class="col-md-6">
                      <p>Preço de Venda</p>
                      <h5><?php echo $price; ?></h5>
                    </div>
                    <div class="col-md-6">
                      <p>Preço de Compra</p>
                      <h5><?php echo $price2; ?></h5>
                    </div>
                  </div>
                  <?php
                  if ($_SESSION['type'] == 1) {
                  ?>
                    <div class="d-flex justify-content-between">
                      <a href="editar-plano.php?edit_id=<?php echo $row['id']; ?>">
                        <button type="button" class="btn btn-success">Editar</button>
                      </a>
                      <a href="?delete_id=<?php echo $row['id']; ?>">
                        <button type="button" class="btn btn-danger">Excluir</button>
                      </a>
                    </div>
                  <?php } ?>
                  <div class="pb-3 mt-2">
                    <input class="btn form-control mb-2" disabled value="https://centrocardsaude.com.br/plano/<?php echo $name; ?>/?dv=<?php echo $_SESSION['login']; ?>" id="myInput">
                    <button class="btn btn-primary" onclick="myFunction()">Copiar Link do plano</button>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        } else {
          ?>
          <p class="text-default">Sem plano cadastrado ...</p>
        <?php
        }
        ?>
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
  <script src="assets/js/main.js"></script>
  <script>
    function myFunction() {
      /* Get the text field */
      var copyText = document.getElementById("myInput");

      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */

      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);

      /* Alert the copied text */
      alert("Código copiado, compartilhe em suas redes sociais");
    }
  </script>

</body>

</html>