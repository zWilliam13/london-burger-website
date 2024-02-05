<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $txtmensaje = $_POST['txtmensaje'];

    $destinatario = "luisquitohilario@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";

    $cuerpo = "Nombre: " . $nombre . "\n";
    $cuerpo .= "Apellido: " . $apellido . "\n";
    $cuerpo .= "dni: " . $dni . "\n";
    $cuerpo .= "email: " . $email  . "\n";
    $cuerpo .= "telefono: " . $telefono  . "\n";
    $cuerpo .= "asunto: " . $asunto  . "\n"; 
    $cuerpo .= "txtmensaje: " . $txtmensaje  . "\n";

    // Envía el correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        header('location: https://www.cobefar.com.pe/London-Burger-%26-cheers/');
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
