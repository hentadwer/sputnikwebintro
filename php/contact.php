<?php
// Guardar los datos recibidos en variables:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_email = $_POST['contact_email'];
$subject = $_POST['contact_subject'];
$message = $_POST['message'];
// Definir el correo de destino:
$dest = "sputnikweb@gmail.com";

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $first_name <$contact_email>\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";
$cuerpo = "Nombre: ".$first_name."<br>";
$cuerpo .= "Apellido: ".$last_name."<br>";
$cuerpo .= "Email: ".$contact_email."<br>";
$cuerpo .= "Asunto: ".$subject."<br>";
$cuerpo .= "Mensaje: ".$message;

// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($first_name != '' && $last_name != '' && $contact_email != '' && $subject != '' && $message != ''){
    mail($dest,$subject,$cuerpo,$headers); //ENVIAR!
}
?>
