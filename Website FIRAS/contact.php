<?php
$field_name = $_POST['name'];
$field_subject = $_POST['subject'];
$field_email = $_POST['email'];
$field_message = "
<html>
<head>
<title>New email</title>
</head>
<body>
	<h2>". $_POST['message'] ."</h2>
</body>
</html>
";

$mail_to = 'firasdokali@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$mail_status = mail('firasdokali@gmail.com',$field_subject, $field_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to firasdokali@gmail.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>