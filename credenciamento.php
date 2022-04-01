<?php
require_once './admin/dbconfig.php';
include "./admin/insert_form.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

error_reporting(~E_ALL); // avoid notice

if (isset($_POST['btnsave'])) {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $district = $_POST['district'];
  $state = $_POST['state'];
  $tel = $_POST['tel'];
  $whats = $_POST['whats'];
  $email = $_POST['email'];
  $id_national = $_POST['id_national'];
  $site = $_POST['site'];
  $type_service = $_POST['type_service'];
  $type_attendance = $_POST['$type_attendance'];
  $zip = $_POST['$zip'];
  $how = $_POST['$how'];
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
    $userpic  = $name3 . "parceiro" . "." . $imgExt;

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
    $stmt = $DB_con->prepare('INSERT INTO partners (name,address,city,district,state,tel,whats,email,img,id_national,site,type_service, type_attendance,zip,how,status) VALUES(:uname,:uaddress,:ucity,:udistrict,:ustate,:utel,:uwhats,:uemail,:upic,:uid_national,:usite,:utype_service,:utype_attendance,:uzip,:uhow,:ustatus)');

    $stmt->bindParam(':uname', $name);
    $stmt->bindParam(':uaddress', $address);
    $stmt->bindParam(':ucity', $city);
    $stmt->bindParam(':udistrict', $district);
    $stmt->bindParam(':ustate', $state);
    $stmt->bindParam(':utel', $tel);
    $stmt->bindParam(':uwhats', $whats);
    $stmt->bindParam(':uemail', $email);
    $stmt->bindParam(':upic', $userpic);
    $stmt->bindParam(':uid_national', $id_national);
    $stmt->bindParam(':usite', $site);
    $stmt->bindParam(':utype_service', $type_service);
    $stmt->bindParam(':utype_attendance', $type_attendance);
    $stmt->bindParam(':uzip', $zip);
    $stmt->bindParam(':uhow', $how);
    $stmt->bindParam(':ustatus', $status);

    if ($stmt->execute()) {
      echo ("<script type= 'text/javascript'>alert('Obrigado! Em breve nossa equipe entrará em contato com você');</script>
      <script>window.location = 'home';</script>");
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="<?php echo $URI->base('/assets/css/variables.css') ?>" rel="stylesheet">

  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">
</head>
<body>
  <?php include "components/navbar-blue.php"; ?>
  <section id="hero3" class="hero3">
    <div class="container">
      <h2>CREDENCIAMENTO</h2>
    </div>
  </section><!-- End Hero Section -->
  <section>
    <div class="container">
      <form method="POST" class="row g-3 bg-white">
        <div class="col-12 col-md-6">
          <label for="inputName" class="form-label">Nome Fantasia/Nome Completo</label>
          <input type="text" value="<?php echo $name; ?>" name="name" placeholder="Digite seu nome completo" class="form-control" id="inputName">
        </div>
        <div class="col-md-6">
          <label for="inputCnpjCPF" class="form-label">CNPJ/CPF</label>
          <input type="text" value="<?php echo $id_national; ?>" name="id_national" placeholder="CPNJ ou CNPJ do prestador" class="form-control" id="inputCnpjCPF">
        </div>
        <div class="col-md-6">
          <label for="typeService" class="form-label">Tipo de prestador de Serviço</label>
          <select name="type_service" class="form-select" id="floatingSelect" aria-label="Tipo">
            <option value="1">CLÍNICA/POLICLÍNICA</option>
            <option value="2">CONSULTÓRIO MÉDICO/ODONTOLÓGICO</option>
            <option value="3">LABORATÓRIO DE ANÁLISES CLÍNICAS</option>
            <option value="4">HOSPITAL</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="typeAttendance" class="form-label">Tipos de Atendimentos</label>
          <select name="type_attendance" class="form-select" id="floatingSelect" aria-label="Tipo">
            <option value="1">PRESENCIAL</option>
            <option value="2">ONLINE</option>
            <option value="3">DOMICILIAR</option>
            <option value="4">PRESENCIAL E ONLINE</option>
            <option value="5">PRESENCIAL E DOMICILIAR</option>
            <option value="6">ONLINE E DOMICILIAR</option>
            <option value="7">TODOS</option>
          </select>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" value="<?php echo $address; ?>" name="address" placeholder="Endereço" class="form-control" id="inputAddress">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" value="<?php echo $city; ?>" name="city" placeholder="Cidade" class="form-control" id="inputCity">
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">Estado
          </label>
          <input type="text" value="<?php echo $state; ?>" name="state" placeholder="Estado" class="form-control" id="inputState">
        </div>
        <div class="col-md-3">
          <label for="inputState" class="form-label">Bairro
          </label>
          <input type="text" value="<?php echo $district; ?>" name="district" placeholder="Bairro" class="form-control" id="inputDistrict">
        </div>
        <div class="col-md-3">
          <label for="inputZip" class="form-label">
            CEP</label>
          <input type="text" value="<?php echo $zip; ?>" name="zip" placeholder="CEP" class="form-control" id="inputZip">
        </div>
        <div class="col-md-4">
          <label for="inputTel" class="form-label">Telefone</label>
          <input type="text" value="<?php echo $tel; ?>" name="tel" placeholder="Número de telefone" class="form-control" id="inputPhone">
        </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">
            Celular/WhatsApp</label>
          <input type="text" value="<?php echo $whats; ?>" name="whats" placeholder="Número de Celular" class="form-control" id="inputPhone">
        </div>
        <div class="col-md-4">
          <label for="inputEmail" class="form-label">
            Email</label>
          <input type="text" value="<?php echo $email ?>" name="email" placeholder="Email para contato" class="form-control" id="inputEmail">
        </div>
        <div class="col-12">
          <label for="inputHow" class="form-label">Como você conheceu ?
          </label>
          <input type="text" value="<?php echo $how ?>" name="how" placeholder="Diga como nós conheceu" class="form-control" id="inputHow">
        </div>
        <div class="col-12">
          <button type="submit" name="btnsave" class="btn btn-cred">CADASTRE-SE</button>
        </div>
      </form>
    </div>
  </section>
  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
  <?php include "components/footer.php"; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo $URI->base('/assets/js/main.js') ?>"></script>
</body>

</html>