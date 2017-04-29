	<div id="content" style="height: 50%;">
		<?php 


		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");


			//mail('ngattusohw@gmail.com', 'My Subject', $message, $headers);

						$name = $_POST['emailerName'];
		    $email = $_POST['email'];
		    $message = $_POST['message'];
		    // In case any of our lines are larger than 70 characters, we should use wordwrap()
		    $message = wordwrap($message, 70, "\r\n");
		    $from = 'From: ' . $email; 
		    $to = 'ngattusohw@gmail.com'; 
		    $subject = 'Customer Inquiry';
		    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
		    $headers = array($from,
			    "Reply-To: ngattusohw@gmail.com",
			    "X-Mailer: PHP/" . PHP_VERSION);
			$headers = implode("\r\n", $headers);

			// $headers = array("From: from@example.com",
			//     "Reply-To: replyto@example.com",
			//     "X-Mailer: PHP/" . PHP_VERSION
			// );
			// $headers = implode("\r\n", $headers);
			// mail($to, $subject, $message, $headers);
			
			if (mail ($to, $subject, $body, $headers)) { 
		        echo '<p>Your message has been sent! Thank you!</p>';
		    } else { 
		        echo '<p>Something went wrong, go back and try again!</p>'; 
		    }

		?>
		
	<br>
			
	</div>
 
</div>




	
