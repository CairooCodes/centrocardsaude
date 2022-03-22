<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location:../index.php");
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CENTROCARD - Painel de Controle</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/icon-semfundo.png" rel="icon">
  <link href="../assets/img/icon-semfundo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php include "components/header.php" ?>
  <?php include "components/sidebar.php" ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Painel Administrativo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Painel Administrativo</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Planos Card -->
            <?php
            if (($_SESSION['type'] == 1) or ($_SESSION['type'] == 2) or ($_SESSION['type'] == 3)) {
            ?>
              <div class="col-xxl-3 col-md-6">
                <a href="painel-leads.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Leads</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="fas fa-align-justify"></i>
                        </div>
                        <div class="ps-3">
                          <?php
                          if ($_SESSION['type'] == 2) {
                          ?>
                            <h6>
                              <?php
                              $sth = $DB_con->prepare("SELECT count(*) as total from leads where dv='$_SESSION[login]'");
                              $sth->execute();
                              print_r($sth->fetchColumn());
                              ?>
                            </h6>
                          <?php }  ?>
                          <?php
                          if ($_SESSION['type'] == 1) {
                          ?>
                            <h6>
                              <?php
                              $sth = $DB_con->prepare("SELECT count(*) as total from leads");
                              $sth->execute();
                              print_r($sth->fetchColumn());
                              ?>
                            </h6>
                          <?php }  ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- End Sales Card -->
              <div class="col-xxl-3 col-md-6">
                <a href="painel-planos.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Planos</h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-bag-plus-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                            <?php
                            $sth = $DB_con->prepare('SELECT count(*) as total from plans');
                            $sth->execute();
                            print_r($sth->fetchColumn());
                            ?>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- End Sales Card -->
              <!-- Revenue Card -->
              <div class="col-xxl-3 col-md-6">
                <a href="painel-beneficios.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Benefícios</span></h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                            <?php
                            $sth = $DB_con->prepare('SELECT count(*) as total from benefits');
                            $sth->execute();
                            print_r($sth->fetchColumn());
                            ?>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xxl-3 col-md-6">
                <a href="#">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Material</span></h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-book-fill"></i>
                        </div>
                        <div class="ps-3">

                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <p class="lead text-center">Link de divulgação</p>
              <div class="d-flex pb-3">
                <input class="btn form-control" disabled value="https://centrocardsaude.com.br/home.php?dv=<?php echo $_SESSION['login']; ?>" id="myInput">
                <button class="btn btn-primary" onclick="myFunction()">Copiar Link</button>
              </div>
            <?php
            }
            ?>
            <!-- Customers Card -->
            <?php
            if ($_SESSION['type'] == 1) {
            ?>
              <div class="col-xxl-4 col-xl-12">
                <a href="painel-usuarios.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Usuários/Afiliados</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                            <?php
                            $sth = $DB_con->prepare('SELECT count(*) as total from users');
                            $sth->execute();
                            print_r($sth->fetchColumn());
                            ?>
                          </h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <a href="painel-servicos.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Serviços</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-plus-circle-fill"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                            <?php
                            $sth = $DB_con->prepare('SELECT count(*) as total from services');
                            $sth->execute();
                            print_r($sth->fetchColumn());
                            ?>
                          </h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <a href="painel-banners.php">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Banners</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="fas fa-images"></i>
                        </div>
                        <div class="ps-3">
                          <h6>
                            <?php
                            $sth = $DB_con->prepare('SELECT count(*) as total from banners');
                            $sth->execute();
                            print_r($sth->fetchColumn());
                            ?>
                          </h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </a>
              </div>
            <?php
            }
            ?>
            <?php
            if ($_SESSION['type'] == 4) {
            ?>
              <div class="col-xxl-4 col-xl-12">
                <a href="https://klinics.videoconsultas.app/paciente/autogestion">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">TELEMEDICINA</span></h5>
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-camera-video-fill"></i>
                        </div>
                        <div class="ps-3">
                          <p class="text-black">Agende agora com um de nossos especialistas</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">CARTEIRA DIGITAL</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-credit-card-2-front-fill"></i>
                      </div>
                      <div class="ps-3">
                        <p>Consulte o número e informações de sua carteira</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">CONTRATO</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-file-earmark-text-fill"></i>
                      </div>
                      <div class="ps-3">
                        <p>Informações contratuais</p>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">MANUAL</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-book-fill"></i>
                      </div>
                      <div class="ps-3">
                        <p>Manual e regualmentos do seu plano e da empresa</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">CONTATOS</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill"></i>
                      </div>
                      <div class="ps-3">
                        <p>Telefones, WhatsApps, Links e mais</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <?php
            if (($_SESSION['type'] == 1) or ($_SESSION['type'] == 2) or ($_SESSION['type'] == 3)) {
            ?>
              <!-- Leads de vendas -->
              <div class="col-12">
                <div class="card recent-sales">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Todos</a></li>
                      <li><a class="dropdown-item" href="#">Semana</a></li>
                      <li><a class="dropdown-item" href="#">Mês</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Leads de vendas</h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Plano</th>
                          <th scope="col">Afiliado</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if ($_SESSION['type'] == 2) {
                        ?>
                          <?php
                          $stmt = $DB_con->prepare("SELECT id, nome, whats,email,opc,data_envio,tipo,dv,status,plan FROM leads where dv='$_SESSION[login]' and tipo='1' ORDER BY id DESC");
                          $stmt->execute();
                          if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              extract($row);
                          ?>
                              <tr>
                                <th scope="row"><a href="#"><?php echo $id; ?></a></th>
                                <td>Cairo Felipe</td>
                                <td><a href="#" class="text-primary"></a><?php echo $plan; ?></td>
                                <td><?php echo $dv; ?></td>
                                <?php
                                if ($status == 1) {
                                ?>
                                  <td><span class="badge bg-light text-black">Pendente</span></td>
                                <?php } ?>
                              </tr>
                            <?php
                            }
                          } else {
                            ?>
                            <div class="pt-4 col-xs-12">
                              <div class="alert alert-danger">
                                Sem Lead Cadastrado ...
                              </div>
                            </div>
                        <?php
                          }
                        }
                        ?>
                      </tbody>
                    </table>

                  </div>

                </div>
              </div><!-- End Recent Sales -->

              <!-- Leads do site -->
              <div class="col-12">
                <div class="card recent-sales">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Todos</a></li>
                      <li><a class="dropdown-item" href="#">Semana</a></li>
                      <li><a class="dropdown-item" href="#">Mês</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Leads do Site</h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Plano</th>
                          <th scope="col">Afiliado</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if ($_SESSION['type'] == 2) {
                        ?>
                          <?php
                          $stmt = $DB_con->prepare("SELECT id, nome, whats,email,opc,data_envio,tipo,dv,status,plan FROM leads where dv='$_SESSION[login]' and tipo='2' ORDER BY id DESC");
                          $stmt->execute();
                          if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                              extract($row);
                          ?>
                              <tr>
                                <th scope="row"><a href="#"><?php echo $id; ?></a></th>
                                <td>Cairo Felipe</td>
                                <td><a href="#" class="text-primary"></a><?php echo $plan; ?></td>
                                <td><?php echo $dv; ?></td>
                                <?php
                                if ($status == 1) {
                                ?>
                                  <td><span class="badge bg-light text-black">Pendente</span></td>
                                <?php } ?>
                              </tr>
                            <?php
                            }
                          } else {
                            ?>
                            <div class="pt-4 col-xs-12">
                              <div class="alert alert-danger">
                                Sem Lead Cadastrado ...
                              </div>
                            </div>
                        <?php
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div><!-- End Recent Sales -->
            <?php
            }
            ?>
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CENTROCARD ADMIN</span></strong>.
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
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