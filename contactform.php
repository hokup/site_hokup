<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "bernardo.braga@hokup.com.br, pedro.alencar@hokup.com.br, caio.estrela@hokup.com.br";
	$headers = "From: ".$mailFrom;
	$txt = "Novo e-mail de ".$name;


	mail($mailTo, $txt, $message, $headers);
	header("Location: index.html?mailsend");
}
 

