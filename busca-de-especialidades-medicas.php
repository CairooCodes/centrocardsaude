<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

// palavra digitada na busca 
$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';
$sql = "SELECT * FROM queries WHERE specialty LIKE :pesquisa OR doctor LIKE :pesquisa OR doctor LIKE :pesquisa OR partner LIKE :pesquisa";

// cria o Prepared Statement e o executa
$stmt = $DB_con->prepare($sql);
$stmt->bindValue(':pesquisa', '%' . $pesquisa . '%');
$stmt->execute();

// cria um array com os resultados
$busca = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        <h3 class="text-white pb-3">Consulte aqui nossa rede de atendimento e o preço com desconto</h3>
        <hr class="text-white">
        <div class="row">
          <div class="col-md-8">
            <h3 class="text-white pb-3">REDE CENTROCARD</h3>
            <div class="d-grid gap-2 d-md-block">
              <a href="busca-de-servicos">
                <button class="btn text-light" type="button">BUSCA DE SERVIÇOS</button>
              </a>
              <a href="busca-de-especialidades-medicas">
                <button class="btn btn-outline-light" type="button">BUSCA DE ESPECIALIDADES MÉDICAS</button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center pb-4">
        <div class="col-md-6">
          <form action="busca-de-especialidades-medicas.php">
            <div class="d-flex">
              <div class="col-md-6">
                <select class="form-select text-uppercase" name="pesquisa">
                  <?php
                  $stmt = $DB_con->prepare("SELECT * FROM categorys where type='2' and status='1'");
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
              </div>
              <div class="col-md-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">PROCURAR</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <?php if ($pesquisa != '') { ?>
        <h4 class="text-white">Resultado da sua busca: <?php echo $pesquisa; ?></h4>
      <?php } ?>
    </div>
    <div class="container container-form">
      <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
            <th>MÉDICO</th>
            <th>ESPECIALIDADE</th>
            <th>CREDENCIADO</th>
            <th>CONTATO</th>
            <th class="text-center">PREÇO CENTROCARD</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (count($busca) > 0) :
            foreach ($busca as $busca) :
          ?>
              <tr>
                <td><?php echo $busca['doctor']; ?></td>
                <td><?php echo $busca['specialty']; ?></td>
                <td><?php echo $busca['partner']; ?></td>
                <td><?php echo $busca['contact']; ?></td>
                <td>
                  <div class="text-search-prices">
                    <?php if ($busca['private_status'] == 1) { ?>
                      <p class="de-price">De <?php echo $busca['private']; ?> por:</p>
                    <?php } ?>
                    <p class="por-price"> <?php echo $busca['centrocard']; ?></p>
                  </div>
                </td>
              </tr>
          <?php endforeach;
          endif; ?>

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