<?php

if(isset($_POST['name'])){

	if(!empty($_POST['name'] && !empty($_POST['asunto'] && !empty($_POST['msg'] && !empty($_POST['email'])
	{

		$name = $_POST['name'];
		$asunto = $_POST['asunto'];
		$msg = $_POST['msg'];
		$email = $_POST['email'];

		$header = "From: noreply@example.com" . "\r\n";
		$header. = "Reply-To: noreply@example.com" . "\r\n"
		$header. = "X-Mailer: PHP/" . php.version();
		$mail = @mail($email, $asunto, $msg,$header);

		if ($mail) {

			echo "<h4>Mail enviado</h4>";

		}

	}


}

?>