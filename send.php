<?php

$name = $_POST['name'];

$organizationName = $_POST['orgname'];

$email = $_POST['email'];

$telephone = $_POST['telephone'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$confirmationSubject = 'bizcapps ems enquiry confirmation';

$enquirySendToEmail = "enquiry@bizcapps.com";

$confirmationMessage = "We've recived your contact information and your enquiry, We will be in Contact with you shortly!";

$body = "\n\n Name : " . $name . "\nOrganization name : " . $organizationName . "\nEmail : " . $email . "\nTelephone number : " . $telephone . "\n\n " . $message;

$header = "From: " . $email;

echo $confirmationMessage . $body;


mail($enquirySendToEmail, $subject, $body, $header);

//confirmation email
$header = "From: noreply@bizcapps.com";

// This is the function to send the email
mail($email, $confirmationSubject, $confirmationMessage, $header);
?>
<script language=javascript>setTimeout("location.href='contact.php'", [3000]);</script>