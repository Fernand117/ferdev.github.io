<?php
require_once('../assets/vendor/phpmailer/class.phpmailer.php');
require_once('../assets/vendor/phpmailer/class.smtp.php');

$mail = new PHPMailer(true);
try {
    $receiving_email_address = 'fernanddev@hotmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com'; // Cambiar al servidor SMTP de su proveedor de correo electrónico
    $mail->SMTPAuth = true;
    $mail->Username = 'fernanddev@hotmail.com'; // Cambiar al correo electrónico del remitente
    $mail->Password = 'Master117+'; // Cambiar a la contraseña del remitente
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    
    $mail->setFrom($mail->Username, $name);
    $mail->addAddress($receiving_email_address);
    
    $mail->Subject = $subject;
    $mail->Body    = $message."\nNombre del cliente: ".$name."\nEmail del contacto: ".$email;
    
    if(!$mail->send()) {
        echo 'El mensaje no pudo ser enviado.';
    } else {
        echo 'El mensaje ha sido enviado.';
    }
} catch (Exception $ex) {
    echo 'Por favor ingrese una dirección de correo válida.'.$ex;
}
?>
