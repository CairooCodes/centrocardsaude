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

  <link href="<?php echo $URI->base('/assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?php echo $URI->base('/assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
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
                <option value="Div1">EXAMES E DIAGNÓSTICOS</option>
                <option value="Div2">CONSULTAS</option>
                <option value="Div2">CONSULTAS DE URGÊNCIA</option>
                <option value="Div3">LABORATÓRIOS</option>
                <option value="Div4">HOSPITAIS</option>
              </select>
            </div>
          </div>
        </form>
      </div>

    </div>
    <div class="DivPai">
      <div class="Div1">
        <div class="container container-form">
          <table id="example" class="display" style="width:100%">
            <thead>
              <tr>
                <th>NOME</th>
                <th>ESPECIALIDADE</th>
                <th>TELEFONE</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $stmt = $DB_con->prepare('SELECT * FROM specialties ORDER BY id ASC');
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <tr>
                    <td><?php echo $name; ?></td>
                    <td>
                      <?php if ($esp_1 != '') { ?>
                        <p><?php echo $esp_1; ?></p>
                      <?php } ?>
                    </td>
                    <td>
                      <p><?php echo $tel; ?></p>
                    </td>
                    <td>TERESINA</td>
                    <td>PI</td>
                  </tr>
              <?php
                }
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>NOME</th>
                <th>ESPECIALIDADE</th>
                <th>TELEFONE</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="Div2">
        <div class="container container-form">
          <table id="example2" class="display" style="width:100%">
            <thead>
              <tr>
                <th>NOME</th>
                <th>ESPECIALIDADE</th>
                <th>TELEFONE</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $stmt = $DB_con->prepare('SELECT * FROM specialties ORDER BY id ASC');
              $stmt->execute();
              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);
              ?>
                  <tr>
                    <td><?php echo $name; ?></td>
                    <td>
                      <?php if ($esp_1 != '') { ?>
                        <p><?php echo $esp_1; ?></p>
                      <?php } ?>
                    </td>
                    <td>
                      <p><?php echo $tel; ?></p>
                    </td>
                    <td>TERESINA</td>
                    <td>PI</td>
                  </tr>
              <?php
                }
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>NOME</th>
                <th>ESPECIALIDADE</th>
                <th>TELEFONE</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="Div3">
        LABORATORIOS
      </div>
      <div class="Div4">
        HOSPITAIS
      </div>
    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <!-- <section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h2>Contato</h2>
        <p>Preencha o formulário abaixo e tenha atendimento especializado</p>
      </div>

    </div>

    <div class="container">

      <div class="row gy-5 gx-lg-5 justify-content-center">

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button class="btn" type="submit">Enviar Mensagem</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <?php include "components/footer.php"; ?>
  <script src="<?php echo $URI->base('/assets/vendor/purecounter/purecounter.jsg') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/aos/aos.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
   <script>
    $(document).ready(function() {
      $('#example2').DataTable({
        language: {
          url: 'assets/js/dataBr.json'
        },
        responsive: true
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      //Select para mostrar e esconder divs
      $('#SelectOptions').on('change', function() {
        var SelectValue = '.' + $(this).val();
        $('.DivPai .Div1').hide();
        $('.DivPai .Div2').hide();
        $('.DivPai .Div3').hide();
        $('.DivPai .Div4').hide();
        $(SelectValue).toggle();
      });
    });
  </script>
</body>

</html>