<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["mail"])) {
        // Recoge la dirección de correo del usuario
        $correo_usuario = $_POST["mail"];

        // Configura la dirección de destino
        $destino = $correo_usuario;

        // Configura el asunto del correo
        $asunto = "Servicio de notificaciones Velez";

        // Cuerpo
        $mensaje = "Gracias por suscribirte a nuestro boletín. Este es un correo de prueba.";

        // Cabeceras del correo
        $cabeceras = "From: jhuantoro@gmail.com";

        // Envía el correo
        mail($destino, $asunto, $mensaje, $cabeceras);

        // Redirecciona a la página actual (puedes cambiar esto a la página que desees)
        echo '<script>window.location.href = "http://localhost/Vélez/index.html";</script>';

        exit; // Asegura que el script se detenga después de la redirección
    } else {
        echo "Error: El correo no ha sido proporcionado";
    }
} else {
    echo "Error: Método no permitido";
}

?>

