<?php
error_reporting(E_PARSE);
if (isset($_POST["submit"])) {

    $nome = $_POST['nome'];
    $whats = $_POST['whats'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $opc = $_POST['opc'];
    $tipo = $_POST['tipo'];

    $nome2 = trim($nome);
    $whats2 = trim($whats);

    $msg_explodida = (explode(" ", $msg));
    $texto = "porn";
    if (in_array($texto, $msg_explodida)) {
        $errMSG = "Mensagem não enviada";
    }

    function substr_in_array($needle, $haystack)
    {
        /*** cast to array ***/
        $needle = (array) $needle;

        /*** map with preg_quote ***/
        $needle = array_map('preg_quote', $needle);

        /*** loop of the array to get the search pattern ***/
        foreach ($needle as $pattern) {
            if (count(preg_grep("/$pattern/", $haystack)) > 0)
                return true;
        }
        /*** if it is not found ***/
        return false;
    }

    $strings = array('http', 'sexy', '<a', 'sex', 'sexual', 'pussy', 'tudo', 'photo', 'https', 'porn', 'porno');

    if (substr_in_array($strings, $msg_explodida) == true) {
        $errMSG = "Mensagem não enviada";
    }

    // if (phoneValidate( $whats ) == false) {
    //     $errMSG = "Por favor, insira um número válido";
    // }

    if (empty($nome2)) {
        $errMSG = "Por favor insira o nome";
    }

    if (empty($whats2)) {
        $errMSG = "Por favor insira um número";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errMSG = "Email inválido";
    }
    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('INSERT INTO leads (nome,whats,email,msg,tipo,opc) VALUES(:unome,:uwhats,:uemail,:umsg,:utipo,:uopc)');
        $stmt->bindParam(':unome', $nome);
        $stmt->bindParam(':uwhats', $whats);
        $stmt->bindParam(':uemail', $email);
        $stmt->bindParam(':umsg', $msg);
        $stmt->bindParam(':utipo', $tipo);
        $stmt->bindParam(':uopc', $opc);



        if ($stmt->execute()) {
            if ($tipo == 1) {
                echo ("
        <script type= 'text/javascript'>alert('Obrigado! Em breve nossa equipe entrará em contato com você');</script>
        <script>window.location = 'index.php';</script>");
            }
            if ($tipo == 2) {
                echo ("
            <script type= 'text/javascript'>alert('Obrigado! Em breve nossa equipe entrará em contato com você');</script>
            <script>window.location = 'index.php';</script>");
            }
            if ($tipo == 3) {
                echo ("
            <script type= 'text/javascript'>alert('Parabéns! Sua inscrição foi realizada.');</script>
            <script>window.location = 'index.php';</script>");
            }
        } else {
            $errMSG = "Erro!";
        }
    }
}
