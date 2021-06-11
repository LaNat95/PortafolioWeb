<?php
$destino="jnata.paz@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: ". $correo . "\nmensaje: ". $mensaje;

mail($destino, "Contacto", $contenido);
?>