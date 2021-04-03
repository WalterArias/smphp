<?php
 /*tener en cuenta que funciona en modo localhost haciendo cambios en la configuracion de php.ini asi:
buscar entrada mail en php.ini
en smtp : smtp.gmail.com
smtp_port : 587
Sendmail_from = suemail@gmail.com
sendmail_path = activarlo
**** editar sendmail.ini ****
auth_username
auth_password
force_sender:

Usando GMAIL:
Quitar autenticacion de 2 factores
Permitir acceso a aplicaciones poco seguras

EN UN HOSTING  ya todo esta configurado!

*/

$para = 'walarias@misena.edu.co';
$objeto = 'pruebas de email walter';
$mensaje = 'esto es una prueba , espero estes bien';
$headers  = 'From: walter.arias.aguirre@gmail.com'."\r\n".'Reply-To:walter.arias.aguirre@gmail.com'."\r\n".'X-Mailer: PHP/'.phpversion();

 try {
    mail($para,$objeto,$mensaje,$headers);
    echo 'exito';
} catch (Exception $e) {
   echo $e->getMessage();
}
 

?>