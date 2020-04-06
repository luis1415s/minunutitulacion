<?php 
error_reporting(0);
$destino="luiscarlos_vocacional5@outlook.es";
$nombre = $_POST["nom"];
$email = $_POST["mail1"];
$contenido = "Hola! Alguien ha dejado sus datos para informacion:\n"."\n"."NOMBRE: ".$nombre."\nEMAIL: ".$email."\n\nCOMUNICATE CON ESTA PERSONA  ;) ";
mail($destino,utf8_decode("INFORMES SOBRE MiNuNú"),utf8_decode($contenido));
/*if ($nombre!="" and $email=="hola") {
	# code...
}*/
/*header(document.getElementById('id01').style.display='none');*/
header("Location:gracias.php");
?>
<!--
$nombre = $_POST["nom"]; 
$correo_electronico= $_POST["mail1"];
$header = 'From: ' . $mail ."\n ";
$header .= "X-Mailer: PHP/" . phpversion() . "\n "; 
$header .= "Mime-Version: 1.0 "."\n ";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . "\n ";
$mensaje .= "Su e-mail es: " . $mail . "\n ";
$mensaje .= "Enviado el: " . date('d/m/Y');
/*
$mensaje .= "sexo" . $_POST['GrupoOpciones1'] . " \r\n"; 
$mensaje .= "aficiones " . $_POST['comentarios'] . " \r\n"; 
$mensaje .= "que opinas de nuestra pagina" . $_POST['GrupoOpciones2'] . " \r\n"; 
$mensaje .="danos tu opinion".$_POST['opinion'] . " \r\n";
*/
/*$mensaje .= "Enviado el: " . date('d/m/Y', time());*/
/*
$para = "luiscarlos_vocacional5@outlook.es"; 
$asunto = "¡SOLICITUD DE INFORMACION!"; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'Mensaje enviado correctamente :)';
?> 
*/