<?php 

/* Configure */

$option_redirect = "http://www.code-crew.net";
$option_email_target = "test@domain.com";

$field_email = "email";
$field_name = "name";
$field_phone = "phone";
$field_message = "message";

/* Main Code */

$message =	"{$_POST[$field_name]}\n{$_POST[$field_phone]}\n\n" .
			"{$_POST[$field_message]}\n"

$headers =	"From: {$_POST[$field_email]}\r\n" .
			"Reply-To: {$_POST[$field_email]}\r\n" .
			"X-Mailer: PHP/" . phpversion();

mail($option_email_target, $_POST[$field_name], $_POST[$field_message], $headers);

if (strlen ($option_redirect) > 10) { header("Location: ".$option_redirect); }
else { header("Location: /"); }


?>
