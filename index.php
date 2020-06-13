<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Mail Form</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<form method="post">
	
	<input type="text" placeholder = "name" name="name" required="">
	<input type="text" placeholder = "Mail" name="email" required="">
	<input type="text" placeholder = "asunto" name="asunto" required="">

	<textarea placeholder="mensaje" name="msg"></textarea>

	<input type="sumbit" name="enviar">

	<?php

include("correo.php");


	?>

</form>
</body>
</html>>