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
    $stmt_delete = $DB_con->prepare('DELETE FROM queries WHERE id =:uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    header("Location: painel-consultas.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Consultas / Painel Administrativo</title>
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
            <h1>Consultas</h1>
            <div class="d-flex justify-content-between">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="painel-controle.php">Home</a></li>
                        <li class="breadcrumb-item active">Consultas</li>
                    </ol>
                </nav>
                <div>
                    <a href="excel-consultas.php">
                        <button class="btn" type="button">
                            <i class="fas fa-file-excel"></i> Baixar
                        </button>
                    </a>
                    <a href="add-consulta.php">
                        <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Adicionar Consulta</button>
                    </a>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section card-body">
            <div class="card recent-sales">
                <div class="card-body">
                    <h5 class="card-title">CONSULTAS</h5>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ESPECIALIDADE</th>
                                <th>MÉDICO</th>
                                <th>CREDENCIADO</th>
                                <th>TELEFONE</th>
                                <th>PARTICULAR</th>
                                <th>CENTROCARD</th>
                                <th>OPÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $DB_con->prepare("SELECT * FROM queries ORDER BY id DESC");
                            $stmt->execute();
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row);
                            ?>
                                    <tr>
                                        <td><?php echo $specialty; ?></td>
                                        <td><?php echo $doctor; ?></td>
                                        <td><?php echo $partner; ?></td>
                                        <td><?php echo $contact; ?></td>
                                        <td><?php echo $private; ?></td>
                                        <td><?php echo $centrocard; ?></td>
                                        <td>
                                            <a href="editar-consulta.php?edit_id=<?php echo $row['id']; ?>">
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
                                        Sem Consulta Cadastrada ...
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
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
    <script>
        $(document).ready(function() {
            $('#example2').DataTable({
                language: {
                    url: '../assets/js/dataBr.json'
                },
                responsive: true
            });
        });
    </script>
</body>

</html>