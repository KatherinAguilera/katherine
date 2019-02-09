<?php
 $destino ="katherinam35@gmail.com";
 $nombre = $_POST["nombre"];
 $email = $_POST["email"];
 $mensaje = $_POST["mensaje"];
 $contenido = "Nombre: ".$nombre ."\nCorreo: " .$email . "\nMensaje: " . $mensaje;
 mail($destino, "Contacto",utf8_decode($contenido));

?>
