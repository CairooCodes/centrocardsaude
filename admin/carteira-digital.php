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
  $stmt_delete = $DB_con->prepare('DELETE FROM material WHERE id =:uid');
  $stmt_delete->bindParam(':uid', $_GET['delete_id']);
  $stmt_delete->execute();

  header("Location: painel-material.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Carteira Digital / Painel Administrativo</title>
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
<style>
  .card {
  margin: auto;
  width: 85.6mm;
  height: 53.98mm;
  color: #fff;
  font: 22px/1 'Iceland', monospace;
  background: #23189a;
  border: 1px solid #1e1584;
  -webkit-border-radius: 10px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 10px;
  -moz-background-clip: padding;
  border-radius: 10px;
  background-clip: padding-box;
  overflow: hidden;
}

.bank-name {
  float: right;
  margin-top: 15px;
  margin-right: 30px;
  font: 800 28px 'Open Sans', Arial, sans-serif;
}

.chip {
  position: relative;
  z-index: 1000;
  width: 50px;
  height: 40px;
  margin-top: 50px;
  margin-bottom: 10px;
  margin-left: 30px;
  background: #fffcb1;
  /* Old browsers */
  background: -moz-linear-gradient(-45deg, #fffcb1 0%, #b4a365 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, #fffcb1), color-stop(100%, #b4a365));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(-45deg, #fffcb1 0%, #b4a365 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(-45deg, #fffcb1 0%, #b4a365 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(-45deg, #fffcb1 0%, #b4a365 100%);
  /* IE10+ */
  background: linear-gradient(135deg, #fffcb1 0%, #b4a365 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#fffcb1", endColorstr="#b4a365", GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  border: 1px solid #322d28;
  -webkit-border-radius: 10px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 10px;
  -moz-background-clip: padding;
  border-radius: 10px;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 2px #322d28, 0 0 5px 0 0 5px rgba(144, 133, 87, 0.25) inset;
  -moz-box-shadow: 0 1px 2px #322d28, 0 0 5px 0 0 5px rgba(144, 133, 87, 0.25) inset;
  box-shadow: 0 1px 2px #322d28, 0 0 5px 0 0 5px rgba(144, 133, 87, 0.25) inset;
  overflow: hidden;
}

.chip .side {
  position: absolute;
  top: 8px;
  width: 12px;
  height: 24px;
  border: 1px solid #322d28;
  -webkit-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
}

.chip .side.left {
  left: 0;
  border-left: none;
  -webkit-border-radius: 0 2px 2px 0;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0 2px 2px 0;
  -moz-background-clip: padding;
  border-radius: 0 2px 2px 0;
  background-clip: padding-box;
}

.chip .side.right {
  right: 0;
  border-right: none;
  -webkit-border-radius: 2px 0 0 2px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 2px 0 0 2px;
  -moz-background-clip: padding;
  border-radius: 2px 0 0 2px;
  background-clip: padding-box;
}

.chip .side:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: inline-block;
  width: 100%;
  height: 0px;
  margin: auto;
  border-top: 1px solid #322d28;
  -webkit-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
}

.chip .vertical {
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  width: 8.66666667px;
  height: 12px;
  border: 1px solid #322d28;
  -webkit-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1), 0 0 4px rgba(0, 0, 0, 0.1) inset;
}

.chip .vertical.top {
  top: 0;
  border-top: none;
}

.chip .vertical.top:after {
  top: 12px;
  width: 17.33333333px;
}

.chip .vertical.bottom {
  bottom: 0;
  border-bottom: none;
}

.chip .vertical.bottom:after {
  bottom: 12px;
}

.chip .vertical:after {
  content: '';
  position: absolute;
  left: -8.66666667px;
  display: inline-block;
  width: 26px;
  height: 0px;
  margin: 0;
  border-top: 1px solid #322d28;
  -webkit-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 5px rgba(144, 133, 87, 0.25) inset, 0 0 5px rgba(144, 133, 87, 0.25), 0 0 4px rgba(0, 0, 0, 0.1);
}

.data {
  position: relative;
  z-index: 100;
  margin-left: 30px;
  text-transform: uppercase;
}

.data .pan,
.data .month,
.data .year,
.data .year:before,
.data .name-on-card,
.data .date {
  position: relative;
  z-index: 20;
  letter-spacing: 1px;
  text-shadow: 1px 1px 1px #000;
}

.data .pan:before,
.data .month:before,
.data .year:before,
.data .year:before:before,
.data .name-on-card:before,
.data .date:before,
.data .pan:after,
.data .month:after,
.data .year:after,
.data .year:before:after,
.data .name-on-card:after,
.data .date:after {
  position: absolute;
  z-index: -10;
  content: attr(title);
  color: rgba(0, 0, 0, 0.2);
  text-shadow: none;
}

.data .pan:before,
.data .month:before,
.data .year:before,
.data .year:before:before,
.data .name-on-card:before,
.data .date:before {
  top: -1px;
  left: -1px;
  color: rgba(0, 0, 0, 0.1);
}

.data .pan:after,
.data .month:after,
.data .year:after,
.data .year:before:after,
.data .name-on-card:after,
.data .date:after {
  top: 1px;
  left: 1px;
  z-index: 10;
}

.data .pan {
  position: relative;
  z-index: 50;
  margin: 0;
  letter-spacing: 1px;
  font-size: 26px;
}

.data .first-digits {
  margin: 0;
  font: 400 10px/1 'Open Sans', Arial, sans-serif;
}

.data .exp-date-wrapper {
  margin-top: 5px;
  margin-left: 64px;
  line-height: 1;
  *zoom: 1;
}

.data .exp-date-wrapper:before,
.data .exp-date-wrapper:after {
  content: " ";
  display: table;
}

.data .exp-date-wrapper:after {
  clear: both;
}

.data .exp-date-wrapper .left-label {
  float: left;
  display: inline-block;
  width: 40px;
  font: 400 7px/8px 'Open Sans', Arial, sans-serif;
  letter-spacing: 0.5px;
}

.data .exp-date-wrapper .exp-date {
  display: inline-block;
  float: left;
  margin-top: -10px;
  margin-left: 10px;
  text-align: center;
}

.data .exp-date-wrapper .exp-date .upper-labels {
  font: 400 7px/1 'Open Sans', Arial, sans-serif;
}

.data .exp-date-wrapper .exp-date .year:before {
  content: '/';
}

.data .name-on-card {
  margin-top: 10px;
}

.lines-up:before {
  content: '';
  position: absolute;
  top: -110px;
  left: -70px;
  z-index: 2;
  width: 480px;
  height: 300px;
  border-bottom: 2px solid #392db2;
  -webkit-border-radius: 0 0 60% 90%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0 0 60% 90%;
  -moz-background-clip: padding;
  border-radius: 0 0 60% 90%;
  background-clip: padding-box;
  box-shadow: inset 1px 1px 44px #4035b2;
  background: #4031b2;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, rgba(64, 49, 178, 0) 100%, #23189a 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(64, 49, 178, 0)), color-stop(100%, #23189a));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, rgba(64, 49, 178, 0) 100%, #23189a 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, rgba(64, 49, 178, 0) 44%, #23189a 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, rgba(64, 49, 178, 0) 44%, #23189a 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, rgba(64, 49, 178, 0) 44%, #23189a 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="rgba(64, 49, 178, 0)", endColorstr="#23189a", GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
}

.lines-up:after {
  content: '';
  position: absolute;
  top: -180px;
  left: -200px;
  z-index: 1;
  width: 530px;
  height: 420px;
  border-bottom: 2px solid #4035b2;
  -webkit-border-radius: 0 40% 50% 50%;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 0 40% 50% 50%;
  -moz-background-clip: padding;
  border-radius: 0 40% 50% 50%;
  background-clip: padding-box;
  box-shadow: inset 1px 1px 44px #4035b2;
  background: #2d21a6;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, rgba(45, 33, 166, 0) 100%, #2d21a6 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(45, 33, 166, 0)), color-stop(100%, #2d21a6));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, rgba(45, 33, 166, 0) 100%, #2d21a6 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, rgba(45, 33, 166, 0) 44%, #2d21a6 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, rgba(45, 33, 166, 0) 44%, #2d21a6 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, rgba(45, 33, 166, 0) 44%, #2d21a6 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="rgba(45, 33, 166, 0)", endColorstr="#2d21a6", GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
}
</style>
<body>
  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Carteira Digital</h1>
      <div class="d-flex justify-content-between">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
            <li class="breadcrumb-item active">Carteira Digital</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="container pt-4 pb-4" title="BestBank">
          <img src="../assets/img/logo-semfundo.png" width="80">
        </div>
        <!-- <div class="chip">
          <div class="side left"></div>
          <div class="side right"></div>
          <div class="vertical top"></div>
          <div class="vertical bottom"></div>
        </div> -->
        <div class="data">
          <div class="pan" title="4123 4567 8910 1112">4123 4567 8910 1112</div>
          <!-- <div class="first-digits">4123</div>
          <div class="exp-date-wrapper">
            <div class="left-label">EXPIRES END</div>
            <div class="exp-date">
              <div class="upper-labels">MONTH/YEAR</div>
              <div class="date" title="01/17">01/17</div>
            </div>
          </div>-->
          <div class="name-on-card" title="John Doe">CAIRO FELIPE DOS REIS MACHADO</div>
        </div>
        <div class="lines-down"></div>
        <div class="lines-up"></div>
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