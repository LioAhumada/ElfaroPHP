<?php
// Incluir la clase Contacto
require_once 'clases.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Crear una instancia de la clase Contacto
    $contacto = new Contacto($nombre, $email, $mensaje);

    // Intentar enviar el correo
    if ($contacto->enviarCorreo()) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
