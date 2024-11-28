<?php

if (isset($_POST["enviar"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["asunto"]) && !empty($_POST["msg"]) && !empty($_POST["email"])){
        $name = $_POST["nombre"];
        $asunto = $_POST["asunto"];
        $msg = $_POST["msg"];
        $email = $_POST["email"];
        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To noreply@expample.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail = mail($email, $asunto, $msg, $header);
        echo $mail;
        if ($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
else {
    echo "<h4>Por favor, rellene todos los campos</h4>";
}