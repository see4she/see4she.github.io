<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$reason = $_POST['reason'];
	$org = $_POST['org'];
	$hardware = $_POST['hardware'];
	
	$to = "behindhereyesbhe@gmail.com";
	
	$msg = "Hi Team V! Someone requested a demo on the website :)\n";
	$msg .= "Name: ".$name."\n";
	$msg .= "Email: ".$email."\n";
	$msg .= "Country: ".$country."\n";
	$msg .= "Organisation: ".$org."\n";
	$msg .= "Hardware: ".$hardware."\n";
	$msg .= "Reason: ".$reason;
	$msg = wordwrap($msg, 70);
	
	$subject = "Demo request";
	
	mail($to, $subject, $msg, "From: behindhereyesbhe@gmail.com");
	
?>
<!doctype html>
<html>

	<head>
	    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<title>Behind Her Eyes</title>
		
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
		
		<script type="text/javascript">
			setTimeout(function(){
				window.location.replace(".");
			}, 3000);
		</script>
	    
	</head>
	
	<body class='body'>
		
		<div id='demothanks' class='parallax'>
			<h1>Thank you!</h1>
			<p>We'll get in touch soon. :)</p>
		</div>
		
	</body>

</html>