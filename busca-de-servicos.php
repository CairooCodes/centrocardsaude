<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

$preco_escolhido = $_POST['preco_escolhido'];
$type = $_POST['type'];



$type_select = $_POST['type'];


if ($preco_escolhido) {
  $compare_preco .= "private as compare_preco,";
}
// Consulta SQL para selecionar apenas o preço escolhido
$sql = "
    SELECT *, $compare_preco
        CASE 
            WHEN :preco_escolhido = 1 THEN plan_1 
            WHEN :preco_escolhido = 2 THEN plan_2 
            WHEN :preco_escolhido = 3 THEN plan_3 
            ELSE centrocard 
        END AS preco_escolhido 
    FROM services WHERE 1=1
";

if ($type) {
  $sql .= " AND type = :type";
}

if ($preco_escolhido) {
  $sql .= " AND plan_1 != '' AND plan_1 is not null";
}

// Preparação e execução da consulta
$stmt = $DB_con->prepare($sql);

$stmt->bindValue(':preco_escolhido', $preco_escolhido);
$stmt->bindValue(':type', $type);
$stmt->execute();
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
  <style>
    #preloader {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      overflow: hidden;
      background: #fff;
    }

    #preloader:before {
      content: "";
      position: fixed;
      top: calc(50% - 30px);
      left: calc(50% - 30px);
      border: 6px solid #01aca3;
      border-top: 6px solid #f2f2f2;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      -webkit-animation: animate-preloader 1.5s linear infinite;
      animation: animate-preloader 1.5s linear infinite;
    }

    @-webkit-keyframes animate-preloader {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes animate-preloader {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
  </style>
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
                <select class="form-select" name="preco_escolhido" id="preco_escolhido">
                  <option value="">Escolha um plano</option>
                  <option value="1">Plano Fácil</option>
                  <option value="2">Plano Essencial</option>
                  <option value="3">Plano Platinum</option>
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
      <?php if ($type_select != '') { ?>
        <h4 class="text-white">Resultado da sua busca: <?php echo $type_select; ?></h4>
      <?php } ?>
      <?php if ($preco_escolhido != '') { ?>
        <h4 class="text-white">Preços do plano escolhido:
          <?php
          if ($preco_escolhido == 1) {
            echo "Fácil";
          }
          if ($preco_escolhido == 2) {
            echo "Essencial";
          }
          if ($preco_escolhido == 3) {
            echo "Platinum";
          }
          ?>
        </h4>
      <?php } ?>
    </div>
    <div class="container container-form">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>SERVIÇO</th>
            <th>CREDENCIADO</th>
            <th>CONTATO</th>
            <th class="text-center text-uppercase">PREÇO
              <?php
              if ($preco_escolhido != '') {
              ?><?php
                if ($preco_escolhido == 1) {
                  echo "Fácil";
                }
                if ($preco_escolhido == 2) {
                  echo "Essencial";
                }
                if ($preco_escolhido == 3) {
                  echo "Platinum";
                }
                ?>
            <?php } else {
                echo "CENTROCARD";
              } ?>
            </th>
            <?php
            if ($preco_escolhido != '') {
            ?>
              <th class="text-center">PREÇO PARTICULAR
              <?php } ?>
              </th>
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
                  <p class="por-price"> <?php echo $linha['preco_escolhido']; ?></p>
                </div>
              </td>
              <?php
              if ($linha['compare_preco'] != "") {
              ?>
                <td>
                  <p class="por-price text-center"> <?php echo $linha['compare_preco']; ?></p>
                </td>
              <?php }
              ?>
            </tr>
          <?php }
          ?>

        </tbody>
      </table>
    </div>
    <div id="preloader"></div>
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