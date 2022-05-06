<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();
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
        <h2>Busque em uma de nossas redes</h2>
        <form action="#">
          <h4 class="text-white">Escolha uma categoria</h4>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <select class="form-select" name="SelectOptions" id="SelectOptions" required>
                <?php
                $i = 1;
                $stmt = $DB_con->prepare("SELECT * FROM categorys where type='1' and status='1'");
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    $e = $i++;
                ?>
                    <option value="Div<?php echo $e; ?>"><?php echo $name ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
          </div>
        </form>
      </div>

    </div>
    <div class="DivPai">
      <?php
      $i = 1;
      $stmt = $DB_con->prepare("SELECT * FROM categorys where type='1' and status='1'");
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
          $e = $i++;
      ?>
          <div class="Div<?php echo $e; ?>">
            <div class="container container-form">
              <table id="example<?php echo $e; ?>" class="display" style="width:100%">
                <?php if ($table == '1') { ?>
                  <thead>
                    <tr>
                      <th>NOME</th>
                      <th>ENDEREÇO</th>
                      <th>CIDADE</th>
                      <th>ESTADO</th>
                      <th>CONTATO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stmt = $DB_con->prepare("SELECT * FROM partners where type_service='4' ORDER BY id DESC");
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                    ?>
                        <tr>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $address; ?></td>
                          <td><?php echo $city; ?></td>
                          <td><?php echo $state; ?></td>
                          <td><?php echo $tel; ?></td>
                        </tr>
                    <?php
                      }
                    } ?>
                  <?php } ?>
              </table>
            </div>
          </div>
      <?php
        }
      }
      ?>
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
  <?php
  $i = 1;
  $stmt = $DB_con->prepare("SELECT * FROM categorys where type='1' and status='1'");
  $stmt->execute();
  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      $e = $i++;
  ?>
      <script>
        $(document).ready(function() {
          $('#example<?php echo $e; ?>').DataTable({
            language: {
              url: 'assets/js/dataBr.json'
            },
            responsive: true
          });
        });
      </script>
  <?php
    }
  }
  ?>
  <script>
    $(document).ready(function() {
      //Select para mostrar e esconder divs
      $('#SelectOptions').on('change', function() {
        var SelectValue = '.' + $(this).val();
        <?php
        $i = 1;
        $stmt = $DB_con->prepare("SELECT * FROM categorys where type='1' and status='1'");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $e = $i++;
        ?>
            $('.DivPai .Div<?php echo $e; ?>').hide();
        <?php
          }
        }
        ?>
        $(SelectValue).toggle();
      });
    });
  </script>
</body>

</html>