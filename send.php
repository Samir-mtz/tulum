<?php
    $name = $_POST['nombre'];
    $apellidos = $_POST['appellidos'];
    $phone = $_POST['numero'];
    $email = $_POST['correo'];
    $pais = $_POST['pais'];
    $adultos = $_POST['adultos'];
    $ninos = $_POST['ninos'];
    $destino = $_POST['destino'];
    $llegada = $_POST['llegada'];
    $hora = $_POST['hora'];
    $message = $_POST['mensaje'];
    
    $subject = "Cotizacion";

    $header = 'From: ' . $email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $message = "Este mensaje fue enviado por: " . $name . $apellidos .  " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Su telefono es: " . $phone . " \r\n";
    $message .= "Pais de origen: " . $pais . " \r\n";
    $message .= "No. de adultos: " . $adultos . " \r\n";
    $message .= "No. de niños: " . $ninos . " \r\n";
    $message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time());

    $para = 'metransferdominios@gmail.com';

    mail($para, $subject, utf8_decode($message), $header);
    echo '<script>alert("Tu mensaje ha sido enviado");
        window.location.href = "index.html";
    </script>';
?>