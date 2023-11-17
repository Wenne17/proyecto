<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Definir el destinatario y el remitente del correo
$destinatario = "jsperezjimenez@ucundinamarca.edu.co"; // Aquí se pone la dirección de correo en la que van a llegar las solicitudes
$remitente = "From: $nombre <$email>";

// Enviar el correo usando la función mail()
if (mail($destinatario, $asunto, $mensaje, $remitente)) {
  // Mostrar un mensaje al usuario usando la función echo()
  echo "Correo enviado con éxito";
} else {
  // Mostrar un mensaje de error al usuario usando la función echo()
  echo "Error al enviar el correo";
}
?>
