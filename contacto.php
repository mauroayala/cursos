<?php

if (isset($_POST["Enviar"])) {
			 
 $email=$_POST["email"];
 $telefono=$_POST["telefono"];
 $nombre=$_POST["nombre"]; 
 $mensaje=$_POST["mensaje"]; 
 $asunto=$_POST["asunto"];  
		
 if($telefono!=""  ) {
 
 //Busbus2022.
        $email_to = "info@recopila.site";
        $email_subject = "Formulario web ";
        $email_message="<html> <head><title>Formulario Web</title></head> <body> <table><tr>
        <td></td></tr>";
        $email_message .="<tr><td>";
        $email_message .= "<h1>Datos </h1>\n\n";

        $email_message .= "<h2>Nombre : " . $nombre . "</h2>";
        $email_message .= "<h2>Email : " . $email . "</h2>";
        $email_message .= "<h2>Telefono : " . $telefono . "</h2>";
        $email_message .= "<h2>Asunto/red social : " . $asunto . "</h2>";
        $email_message .= "<h2>Mensaje : " . $mensaje . "</h2>"; 
 
        $headers = 'From: '.$email_to."\r\n".
        'MIME-Version: 1.0' . "\r\n".
        'Content-type: text/html; charset=utf-8' . "\r\n".
      
        'Reply-To: '.$email_to."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        $headers .= "To: $email_to\r\n";
        $email_message .="</td></tr>
        <tr><td>
        </td></tr>
        </table></body></html>"; 
         $success=mail("mauro.julian.ayala@gmail.com", $email_subject, $email_message, $headers);


 
 header('Location: https://mauroayala.github.io/cursos/registro.html?mensaje=ok');

			echo"<p class='botonVerde' >Muchas gracias a la brevedad nos comunicaremos con usted. </p>";
 
		}else{

			echo "<p class='botonRed' >Debe completar todos los datos para poder enviar el mensaje. </p>";
		}
		//fin del if que verifica todos los datos completos


							}
												
							?>