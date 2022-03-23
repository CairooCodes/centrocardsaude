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
    $stmt_delete = $DB_con->prepare('DELETE FROM services WHERE id =:uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    header("Location: painel-servicos.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Serviços / Painel Administrativo</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php include "components/header.php" ?>
    <?php include "components/sidebar.php" ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Serviços</h1>
            <div class="d-flex justify-content-between">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Serviços</li>
                    </ol>
                </nav>
                <a href="add-servico.php">
                    <button type="submit" name="btnsave" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Adicionar Serviços</button>
                </a>
            </div>
        </div><!-- End Page Title -->

        <section class="section card-body">
            <div class="card recent-sales">
                <div class="card-body">
                    <h5 class="card-title">Serviços</h5>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>SERVIÇO</th>
                                <th>PARCEIRO</th>
                                <th>ENDEREÇO E CONTATO</th>
                                <th>PARTICULAR</th>
                                <th>CENTROCARD</th>
                                <th>OPÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $DB_con->prepare("SELECT * FROM services ORDER BY id DESC");
                            $stmt->execute();
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row);
                            ?>
                                    <tr>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $partner; ?></td>
                                        <td>
                                            <a href="#parceiro-<?php echo $partner; ?>" id="popup" class="jsModalTrigger">
                                                <button class="btn-saiba-mais btn" type="button" id="popup" class="jsModalTrigger">
                                                    Saiba Mais
                                                </button>
                                            </a>
                                        </td>
                                        <td><?php echo $private; ?></td>
                                        <td><?php echo $centrocard; ?></td>
                                        <td>
                                            <a href="editar-servico.php?edit_id=<?php echo $row['id']; ?>">
                                                <button type="button" class="btn btn-success">Editar</button>
                                            </a>
                                            <a href="?delete_id=<?php echo $row['id']; ?>">
                                                <button type="button" class="btn btn-danger">Excluir</button>
                                            </a>
                                        </td>
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
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SERVIÇO</th>
                                <th>PARCEIRO</th>
                                <th>ENDEREÇO E CONTATO</th>
                                <th>PARTICULAR</th>
                                <th>CENTROCARD</th>
                                <th>OPÇÕES</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php
            $stmt = $DB_con->prepare('SELECT * FROM partners ORDER BY id ASC');
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
            ?>
                    <div id="parceiro-<?php echo $name; ?>" class="modal2">
                        <div class="modal__overlay jsOverlay"></div>
                        <div class="modal__container">
                            <div class="parceiro-box d-flex">
                                <div class="parceiro-infos">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Endereço</h4>
                                            <p class="lead"><?php echo $address; ?></p>
                                            <p class="lead"><?php echo $city; ?> - <?php echo $state; ?></p>
                                            <p class="lead"><?php echo $district; ?></p>
                                            <p class="lead"><?php echo $zip; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Contato</h4>
                                            <div class="row justify-content-center">
                                                <p class="lead"><?php echo $tel; ?></p>
                                                <p class="lead"><?php echo $whats; ?></p>
                                                <?php if ($email != '') { ?>
                                                    <p class="lead parceiro-email"><?php echo $email; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="modal__close jsModalClose">&#10005;</button>
                        </div>
                    </div>
            <?php
                }
            } ?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    url: '../assets/js/dataBr.json'
                },
                responsive: true
            });
        });
    </script>
</body>

</html>