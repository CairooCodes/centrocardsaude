<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
require_once 'dbconfig.php';
include "add-log.php";

if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="../assets/img/logo.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CENTROCARD / Painel de Controle
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="../assets/css/style.css" rel="stylesheet" />
</head>
<body>
  <form action="" method="POST">
    <input type="hidden" class="form-control" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" />
    <input type="hidden" class="form-control" type="text" name="type" value="login" />
    <button id="clickButton" type="submit" name="submit"style="background-color:transparent;" value="LOG"></button>
  </form>
  <div id="preloader"></div>
  <script type="text/javascript">
    window.setTimeout(function() {
      document.getElementById("clickButton").click();
    }, 1500);
  </script>
</body>

</html>