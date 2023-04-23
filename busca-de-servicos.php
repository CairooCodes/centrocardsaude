<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$plan = filter_input(INPUT_POST, 'plan', FILTER_SANITIZE_STRING);

// Constrói a consulta SQL com base nos valores selecionados
$sql = "SELECT * FROM services WHERE 1=1";

if ($type) {
  $sql .= " AND type = :type";
}

if ($plan) {
  $sql .= " AND plan_1 = :plan or plan_2 = :plan or plan_3 = :plan";
}

// Prepara a consulta SQL
$stmt = $DB_con->prepare($sql);

if ($type) {
  $stmt->bindParam(':type', $type);
}

if ($plan) {
  $stmt->bindParam(':plan', $plan);
}

// Executa a consulta SQL
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BUSCA REDE CENTROCARD SAÚDE</title>
  <meta name="description" content="CENTROCARD SAÚDE - Solução inteligente em saúde e benefícios" />
  <meta content="CENTROCARD, SAÚDE, Solução inteligente" name="keywords">
  <meta property="og:title" content="CENTROCARD SAÚDE" />
  <meta property="og:url" content="https://centrocardsaude.com.br/" />
  <meta property="og:image" content="https://centrocardsaude.com.br/assets/img/logo.jpg" />

  <!-- Favicons -->
  <link href="./assets/img/icon-semfundo.png" rel="icon">
  <link href="./assets/img/icon-semfundo.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="<?php echo $URI->base('/assets/css/variables.css') ?>" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include "components/navbar-blue.php"; ?>
  <!-- ======= Contact Section ======= -->
  <section id="redes" class="redes">
    <div class="container">

      <div class="section-header">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h3 class="text-white pb-3">CENTROCARD SAÚDE</h3>
          </div>
        </div>
        <hr class="text-white">
        <h3 class="text-white pb-3">Consulte aqui nossa rede de atendimento e o preço com desconto</h3>
      </div>
      <div class="row justify-content-center pb-4">
        <div class="col-md-8">
          <form method="post" action="busca-de-servicos.php">
            <div class="d-flex">
              <div class="d-md-flex">
                <select class="form-select" name="type">
                  <option value="">Escolha um tipo</option>
                  <?php
                  $stmt = $DB_con->prepare("SELECT * FROM categorys where type='1' and status='1'");
                  $stmt->execute();
                  if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      extract($row);
                  ?>
                      <option value="<?php echo $name ?>"><?php echo $name ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>
                <select class="form-select" name="plan">
                  <?php
                  $stmt = $DB_con->prepare("SELECT * FROM plans");
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
              </div>
              <div class="d-md-flex">
                <button type="submit" class="btn btn-primary">PROCURAR <i class="bi bi-search"></i></button>
                <button type="submit" onclick="window.location.href='busca-de-servicos.php'" class="btn text-white">LIMPAR BUSCA <i class="bi bi-x-lg"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <?php if ($pesquisa != '') { ?>
        <button type="submit" class="btn btn-primary">PROCURAR</button>
        <h4 class="text-white">Resultado da sua busca: <?php echo $pesquisa; ?></h4>
      <?php } ?>
    </div>
    <div class="container container-form">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>SERVIÇO</th>
            <th>CREDENCIADO</th>
            <th>CONTATO</th>
            <th class="text-center">PREÇO CENTROCARD</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($resultado as $linha) {
          ?>
            <tr>
              <td><?php echo $linha['name']; ?></td>
              <td><?php echo $linha['partner']; ?></td>
              <td>
                <?php
                if ($linha['contact'] != "") {
                  echo $linha['contact'];
                }
                if ($linha['contact2'] != "") {
                  echo $linha['contact2'];
                }
                ?>
              </td>
              <td>
                <div class="text-search-prices">
                  <?php if ($linha['private_status'] == 1) { ?>
                    <p class="de-price">De <?php echo $linha['private']; ?> por:</p>
                  <?php } ?>
                  <p class="por-price"> <?php echo $linha['centrocard']; ?></p>
                </div>
              </td>
            </tr>
          <?php }
          ?>

        </tbody>
      </table>
    </div>
  </section><!-- End Contact Section -->
  </main><!-- End #main -->


  <?php include "components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/script.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        language: {
          url: 'assets/js/dataBr.json'
        },
        responsive: true
      });
    });
  </script>

</body>

</html>