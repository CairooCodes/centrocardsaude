<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

error_reporting(~E_ALL); // avoid notice

if (isset($_POST['btnsave'])) {
  $name = $_POST['name'];
  $login = $_POST['login'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $type = $_POST['type'];
  $whats = $_POST['whats'];
  $address = $_POST['address'];
  $bairro = $_POST['bairro'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $status = $_POST['status'];

  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];

  if (empty($name)) {
    $errMSG = "Por favor, insira o nome";
  } else {
    $upload_dir = 'uploads/usuarios/'; // upload directory
    $imgExt =  strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

    $valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
    // rename uploading image
    $name2 = preg_replace("/\s+/", "", $name);
    $name3 = substr($name2, 0, -1);
    $userpic  = $name3 . "perfil" . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
      // Check file size '5MB'
      if ($imgSize < 5000000) {
        move_uploaded_file($tmp_dir, $upload_dir . $userpic);
      } else {
        $errMSG = "Imagem muito grande.";
      }
    }
  }
  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('INSERT INTO users (name,login,email,pass,type,whats,address,bairro,city,state,img,status) VALUES(:uname,:ulogin,:uemail,:upass,:utype,:uwhats,:uaddress,:ubairro,:ucity,:ustate,:upic,:ustatus)');
    $stmt->bindParam(':uname', $name);
    $stmt->bindParam(':ulogin', $login);
    $stmt->bindParam(':uemail', $email);
    $stmt->bindParam(':upass', $pass);
    $stmt->bindParam(':utype', $type);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':uwhats', $whats);
    $stmt->bindParam(':uaddress', $address);
    $stmt->bindParam(':ubairro', $bairro);
    $stmt->bindParam(':ucity', $city);
    $stmt->bindParam(':ustate', $state);
    $stmt->bindParam(':ustatus', $status);

    if ($stmt->execute()) {
      echo ("<script>window.location = 'painel-usuarios.php';</script>");
    } else {
      $errMSG = "Erro..";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CENTROCARD SAÚDE</title>
  <meta name="description" content="CENTROCARD SAÚDE - Solução inteligente em saúde e benefícios" />
  <meta content="CENTROCARD, SAÚDE, Solução inteligente" name="keywords">
  <meta property="og:title" content="CENTROCARD SAÚDE" />
  <meta property="og:url" content="https://centrocardsaude.com.br/" />
  <meta property="og:image" content="https://centrocardsaude.com.br/assets/img/logo.jpg" />
  <link href="./assets/img/icon-semfundo.png" rel="icon">
  <link href="./assets/img/icon-semfundo.png" rel="apple-touch-icon">
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
</head>
<style>
  .btn-cred {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 35px;
    margin-top: 30px;
    border-radius: 50px;
    transition: 0.5s;
    color: white;
    background: #0079a4;
  }
</style>

<body>
  <?php include "components/navbar-blue.php"; ?>
  <section id="hero3" class="hero3">
    <div class="container">
      <h2>CADASTRO AFILIADO</h2>
    </div>
  </section><!-- End Hero Section -->
  <section>
    <div class="container">
      <form method="POST"  class="row g-3 bg-white">
        <div class="col-12">
          <label for="inputAddress" class="form-label">Nome Completo</label>
          <input type="text" value="<?php echo $name; ?>" name="name" placeholder="Digite seu nome completo" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Whats-App</label>
          <input type="text"  value="<?php echo $whats; ?>" name="whats" placeholder="Número de telefone"  class="form-control" id="inputAddress2">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Email</label>
          <input type="text"  value="<?php echo $email ?>" name="email" placeholder="Emaail para contato"  class="form-control" id="inputAddress2">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" value="<?php echo $address; ?>" name="address" placeholder="Endereço" class="form-control" id="inputAddress">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Bairro</label>
          <input type="text"  value="<?php echo $bairro; ?>" name="bairro" placeholder="Bairro" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" value="<?php echo $city; ?>" name="city" placeholder="Cidade" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
          <label for="inputZip" class="form-label">Estado
          </label>
          <input type="text" value="<?php echo $state; ?>" name="Estado" placeholder="Estado" class="form-control" id="inputZip">
        </div>
        <h2>Segurança</h2>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Login
          </label>
          <input type="login" value="<?php echo $login; ?>" name="login" placeholder="Login" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">
            Senha
          </label>
          <input type="password" value="<?php echo $pass; ?>" name="pass" placeholder="Cidade" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <button  type="submit" name="btnsave"  class="btn btn-cred">CADASTRE-SE</button>
        </div>
      </form>
    </div>
  </section>
  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
  <?php include "components/footer.php"; ?>
  <script src="<?php echo $URI->base('/assets/vendor/purecounter/purecounter.jsg') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?php echo $URI->base('/assets/vendor/aos/aos.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
</body>

</html>