<?php 
$nombre_form = $_POST['nombreCompleto'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_email =
"Nombre completo: " .$nombre_form."\r\n".
"Correo electrónico: " .$email_form."\r\n".
"Mensaje: " .$mensaje_form;

mail($email_form, "Mensaje de la actividad 3.", $cuerpo_email);

header("consulta.php");
exit;
