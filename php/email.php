<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $year = $_POST['year'];
    $razonSoscial = $_POST['razonSoscial'];
    $nombre = $_POST['nombre'];
    $domicilio = $_POST['domicilio'];
    $dniCe = $_POST['dniCe'];
    $telefono = $_POST['telefono'];
    $PadreMadre = $_POST['PadreMadre'];
    $servicio = $_POST['servicio'];
    $productoMensaje = $_POST['productoMensaje'];
    $incidente = $_POST['incidente'];
    $detalleReclamoQueja = $_POST['detalleReclamoQueja'];
    $ActMensajeProveedor = $_POST['ActMensajeProveedor'];

    $destinatario = "luisquitohilario@gmail.com";
    $asunto = "Mensaje del libro reclamacion";

    $cuerpo = "dia: " . $dia . "\n";
    $cuerpo .= "mes: " . $mes . "\n";
    $cuerpo .= "year: " . $year . "\n";
    $cuerpo .= "razonSoscial: " . $razonSoscial  . "\n";
    $cuerpo .= "nombre: " . $nombre  . "\n";
    $cuerpo .= "domicilio: " . $domicilio  . "\n"; 
    $cuerpo .= "dniCe: " . $dniCe  . "\n";
    $cuerpo .= "telefono: " . $telefono . "\n";
    $cuerpo .= "PadreMadre: " . $PadreMadre . "\n";
    $cuerpo .= "servicio: " . $servicio . "\n";
    $cuerpo .= "productoMensaje: " . $productoMensaje  . "\n";
    $cuerpo .= "incidente: " . $incidente  . "\n";
    $cuerpo .= "detalleReclamoQueja: " . $detalleReclamoQueja  . "\n"; 
    $cuerpo .= "ActMensajeProveedor: " . $ActMensajeProveedor  . "\n";

    // Envía el correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        header('location: https://www.cobefar.com.pe/London-Burger-%26-cheers/');
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
