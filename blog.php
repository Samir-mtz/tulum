<?php
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $web = $_POST['web'];
    $message = $_POST['mensaje'];

    $subject = "Comentario Blog";

    $header = 'From: ' . $email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'metransferdominios@gmail.com';

    mail($para, $subject, utf8_decode($message), $header);
    echo '<script>alert("tu mensaje ha sido enviado");
        window.location.href = "index.html";
    </script>';
?>