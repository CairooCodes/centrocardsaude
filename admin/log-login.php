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
  <link href="../assets/img/icon-semfundo.png" rel="icon">
  <link href="../assets/img/icon-semfundo.png" rel="apple-touch-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CENTROCARD / Painel de Controle
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

</head>
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

<body>
  <form action="" method="POST">
    <input type="hidden" class="form-control" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" />
    <input type="hidden" class="form-control" type="text" name="type" value="login" />
    <button id="clickButton" type="submit" name="submit" style="background-color:transparent;" value="LOG"></button>
  </form>
  <div id="preloader"></div>
  <script type="text/javascript">
    window.setTimeout(function() {
      document.getElementById("clickButton").click();
    }, 1500);
  </script>
</body>

</html>