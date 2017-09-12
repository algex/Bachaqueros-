<?php

	$to = "gerardoj2411@gmail.com";
	$name = $_POST['name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$message = $_POST['text'];

	/*Headers of mail*/
	$header ="MIME-Version:1.0;\r\n";
	$header.="Content-type: text/html; \r\n charset=iso-8859-1 \r\n";
	$header.="From: Denuncias <gerardo@gerardo.com.ve> \r\n";
	/*End Headers of mail*/

	/*content mail*/
	$content_mail="<html>
 		<head>
 		<title>Nueva denuncia</title>
 		</head>
 		<body>
 		<center><h1>Nueva denuncia</h1></center>
 		<p><b>Nueva denuncia de: <u>$name</u></b></p>
 		<p><b>Apellido: <u>$last_name</u></b></p>
 		<p><b>Email de quien envía: <u>$email</u></b></p>
 		<p><b>Dirección: <u>$address</u></b></p>
 		<p><b>Teléfono: <u>$phone</u></b></p>
 		<p><b>Mensaje o Denuncia: $message</b></p>
 		</body>
 		</html>";
 	/* End content mail*/

 	/*Send email*/

 	mail($to,"Nueva Denuncia de: ".$name, $content_mail,$header);

 	/*End Send email*/

 	echo '
 	<script>
     alert("Enviado");
     location.href ="https://pruebasgerardo.000webhostapp.com/";
    </script> ';
?>