<?php

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["textarea"];


$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $email . ",\r\n";
$mensaje .= "El asunto es: " . $asunto . ",\r\n";
$mensaje .= "Mensaje: " . $_POST["textarea"] . ",\r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time())

$destinatario = "stephano.e.o.b@gmail.com";

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");






?>