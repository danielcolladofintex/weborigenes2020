<?php


header( "Refresh:5; url=https://origeneslodge.com", true, 303);


$mi_web="<a href='https://origeneslodge.com' align='center'>www.origeneslodge.com";
$mail='reservas@origeneslodge.com';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];



$message = "
Nombre:".$nombre."
Telefono:".$telefono."
Email:" . " " . $email."
Mensaje:".$mensaje."";

(mail($mail, "Formulario Web", $message));

echo "<img align='center' src='LogoOrigenesLodgeMONOCOLORNEGROFONDOTRANSPARENTE2000xPNG.png' border='0' width='140' hspace='20'/> <br> ";


echo "<h2 align='center' >SU MENSAJE:</h2>";
echo "<p align='center'>NOMBRE: $nombre</p>";
echo "<p align='center'>TELEFONO: $telefono</p>";
echo "<p align='center'>EMAIL: $email</p>";
echo "<p align='center'>MENSAJE: $mensaje</p>";
echo "<p align='center'><br></p>";

echo "<h2 align='center'>SU SOLICITUD HA SIDO ENVIADA SATISFACTORIAMENTE !</h2>";

echo "<h5 align='center'>GRACIAS, EN BREVES NOS PONDREMOS EN CONTACTO CON USTED.</h5>";

echo "<h4 align='center'>ORÍGENES LODGE</h4>";
echo "<h5 align='center'>COSTA RICA</h5>";
echo "<h5 align='center'>+506 8746 5288</h5>";
echo "<h5 align='center'>Email: reservas@origeneslodge.com</h5>";
echo"<h5 align='center'>5 km al sur de Playa Hermosa
[Garabito] • Província de Puntarenas,
61101 - Costa Rica </h5>";
echo"<h5 align='center'>Volver a $mi_web</h6>";


ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "reservas@origeneslodge.com" ;
$to = $email;
$subject = " Confirmación Solicutud de Reserva ";
$message = "Hola ! ". $nombre.", Gracias por contactar con nosotros, en breves el equipo de Orígenes Lodge se pondrá en contacto con usted. ";
$headers = "Orígenes Lodge  " . $from;

mail($to,$subject,$message, $headers);
?>
