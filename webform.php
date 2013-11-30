<?php 

$option_redirect = "http://www.code-crew.net";
$option_email_target = "test@domain.com";

$field_email = "email";
$field_name = "name";
$field_phone = "phone";
$field_message = "message";

mail($option_email_target, "WEBFORM", $_POST[$field_message]);

if (strlen ($option_redirect) > 10) { header("Location: ".$option_redirect); }
else { header("Location: /"); }


?>
