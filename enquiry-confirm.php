<?php

$name = $_POST['name'];

$organizationName = $_POST['orgname'];

$email = $_POST['email'];

$telephone = $_POST['telephone'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$confirmationSubject = 'Enquiry confirmation, bizcapps';

$enquirySendToEmail = "enquiry@bizcapps.com";

$confirmationHeader = "Dear $name,\n\n";

$confirmationBody = "\tWe've recived your contact information and your enquiry, We will be in Contact with you shortly!";

$confirmationFooter = "\n\nYour sincerely,\n EMS Team, \n bizcapps. \n Trust us today tomorrow you are going to belive us.";

$confirmationMessage = $confirmationHeader . $confirmationBody . $confirmationFooter;

$body = 	"\n\n Name 				: " . $name 
		   ."\n\nOrganization name 	: " . $organizationName 
		   ."\n\nEmail 				: " . $email 
		   ."\n\nTelephone number 	: " . $telephone 
		   ."\n\n " . $message;

$header = "From: " . $email;

//Sending enquiry email
mail($enquirySendToEmail, $subject, $body, $header);

//confirmation email
$header = "From: noreply@bizcapps.com";

//Sending confirmation email.
mail($email, $confirmationSubject, $confirmationMessage, $header);

echo "<h1 style=\"float: left;margin-left: 20px;font-size: 24px;\">Dear $name ,</h1>";
?>


<p style="float: left;margin-left: 20px;margin-bottom: 10px;">
	We've recived your contact information and your enquiry, We will be in contact with you shortly!
</p>
<form action="contact.php" method="post" id="returnFrom">
	<fieldset style="border: 0px;">
		<div class="form-field">
			<input type="submit" value="Back" class="button" style="margin-left: 0px;">
		</div>
	</fieldset>
	<br>
</form>
<div id="directions_extension" style="display: none;"></div>