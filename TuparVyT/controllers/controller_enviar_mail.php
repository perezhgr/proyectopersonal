	<?php
	$respuesta_ajax_mail = NULL;
	if(isset($_POST['asunto'])) {
		
		require 'PHPMailer-master/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'tuparvyt@gmail.com';    			  // SMTP username
		$mail->Password = 'programacionweb';                  // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->From = ' postmaster@localhost';
		$mail->FromName = 'Tupar VyT';
		$mail->addAddress('tuparvyt@gmail.com', 'Hugo');     // Add a recipient
		$mail->addAddress('Hugo');               			 // Name is optional
		$mail->addReplyTo('tuparvyt@gmail.com', 'Mensaje de prueba');
		$mail->addCC('tuparvyt@gmail.com');
		$mail->addBCC('tuparvyt@gmail.com');

		$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $_POST['asunto'];
		$mail->Body    = $_POST['mensaje'];

		if(!$mail->send()) {
			$respuesta_ajax_mail = FALSE;
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			$respuesta_ajax_mail = TRUE;
		}

		echo json_encode(array('respuesta_ajax'=>$respuesta_ajax_mail));
		exit();

	}
	?>