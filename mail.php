<html>
<head><title>Canvas Estudio Contacto</title></head>
<body>
<?php

$subject = "nombre : ";
/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email_to = "info@canvasestudio.com.co";
$email = $_POST['email'];
$subject .= $_POST['name'];
$message = $_POST['message'];



/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if (!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
  echo '<img src="./img/mainlogo.jpg" class="w3-round w3-image" alt="Photo of Me" width="300" height="300">';
  echo "<h4>Email invalido</h4>";
  echo "<a href='javascript:history.back(1);'>Volver</a>";
} elseif ($subject == "") {
  echo '<img src="./img/mainlogo.jpg" class="w3-round w3-image" alt="Photo of Me" width="300" height="300">';
  echo "<h4>Por favor ingrese un titulo</h4>";
  echo "<a href='javascript:history.back(1);'>Volver</a>";
} elseif ($message == "") {
  echo '<img src="./img/mainlogo.jpg" class="w3-round w3-image" alt="Photo of Me" width="300" height="300">';
  echo "<h4>Por favor ingrese un mensaje</h4>";
  echo "<a href='javascript:history.back(1);'>Volver</a>";
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail($email_to,$subject,$message)) {
  echo '<img src="./img/mainlogo.jpg" class="w3-round w3-image" alt="Photo of Me" width="300" height="300">';
	echo "<h4>Gracias por contactarnos, responderemos en breve</h4>";
	echo "<a href='fotografia-matrimonio-bogota.html'>Volver</a>";
} else {
  echo '<img src="./img/mainlogo.jpg" class="w3-round w3-image" alt="Photo of Me" width="300" height="300">';
	echo "<h4>Falló el envio de la informacion por favor llamar al 3014951682</h4>";
	echo "<a href='fotografia-matrimonio-bogota.html'>Volver</a>";
}
?>
</body>
</html>