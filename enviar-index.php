<?php

if ($_POST['nospam'] != ""){
 // Es un SPAMbot

 exit();

} else {

		 // Es un usuario real, proceder a enviar el formulario.
	$destino="contacto@prometeochile.cl"; /* MAIL DE DESTINO */
	$mail= $_POST["correo"];
	$contenido= $mail;
	mail($destino,"",$contenido);
	header("Location:http://prometeochile.cl/web3/");

}
?>