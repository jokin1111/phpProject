<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once '../phpmailer/Exception.php';  // Asegúrate de que la ruta es correcta
require_once '../phpmailer/PHPMailer.php'; 
require_once '../phpmailer/SMTP.php';

if (isset($_POST["enviar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["asunto"]) && !empty($_POST["msg"]) && !empty($_POST["email"])) {
        $name = $_POST["nombre"];
        $asunto = $_POST["asunto"];
        $msg = $_POST["msg"];
        $email = $_POST["email"];

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = "smtp.example.com";
            $mail->SMTPAuth = true;
            $mail->Username = "user@example.com";
            $mail->Password = "secret";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom("from@example.com", "joaquin");
            $mail->addAddress("joe@example.net", "joe");

            $mail->isHTML(true);
            $mail->Subject = "asunto";
            $mail->Body = "cuerpo";
            $mail->AltBody = "hola";

            if($mail->send()){
                echo"Enviado con exito";
            }
        } catch (Exception $e) {
            echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        }
        
    } else {
        echo "<h4>Por favor, rellene todos los campos</h4>";
    }
}
/*  $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        //$correo = $mail->($email, $asunto, $msg, $header);
        $correo = mail($email, $asunto, $msg, $header);

        if ($correo){
            echo "<h4>Mail enviado exitosamente</h4>";
        } */
/* try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Servidor SMTP de Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'joaquinantequera2002@gmail.com';  // Tu cuenta de Gmail
    $mail->Password = 'Ultraruchobacano123.';  // Contraseña o App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Cifrado STARTTLS
    $mail->Port = 25;  // Puerto para STARTTLS

    // Remitente y destinatario
    $mail->setFrom("noreplay@gmail.com", "Joaquin");
    $mail->addAddress($email, $name);  // El destinatario

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $msg;
    $mail->AltBody = strip_tags($msg);

    // Enviar el correo
    $mail->send();
    echo "<h4>¡Mail enviado exitosamente!</h4>";
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
} */