<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Datos del formulario
$nombre  = trim($_POST['nombre'] ?? '');
$email   = trim($_POST['correo'] ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

// Validación de formato
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: error.html?error=formato");
    exit;
}

// Validación de dominio
$domain = substr(strrchr($email, "@"), 1);
if (!checkdnsrr($domain, "MX") && !checkdnsrr($domain, "A")) {
    header("Location: error.html?error=dominio");
    exit;
}

// Configuración de PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = #;
    $mail->Password   = #;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('taskpro.help7008@gmail.com', 'Huerta Ofir');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "Mensaje de $nombre";
    $mail->Body    = nl2br($mensaje);

    $mail->send();
    header("Location: gracias.html");
    exit;

} catch (Exception $e) {
    header("Location: error.html?error=envio");
    exit;
}
?>
