<?php
if ($_GET["plan"] == 'basic') {
	echo '<h1 style="float: left;margin-left: 20px;font-size: 24px;">Signup for basic and start using the application</h1>';
} else {
	echo '<h1 style="float: left;margin-left: 20px;font-size: 24px;">Signup for enterprice and start using the application</h1>';
}
?>

<?php
if ($_GET["plan"] == 'basic') {
	echo '<form action="signup.php?submitPlan=basic" method="post" id="signupForm">';
} else {
	echo '<form action="signup.php?submitPlan=enterprice" method="post" id="signupForm">';
}
?>
	<fieldset style="border: 0px;">
		<div class="form-field">
			<label for="name_Req">Your name <strong>*</strong></label>
			<input type="text" id="name_Req" name="name" class="validate[required]" />
		</div>

		<div class="form-field">
			<label for="orgname_Req" style="white-space: nowrap">Organization name <strong>*</strong></label>
			<input type="text" id="orgname_Req" name="orgname" class="validate[required]" />
		</div>

		<div class="form-field" >
			<label for="contact_Req_Email">E-mail <strong>*</strong></label>
			<input type="text" id="contact_Req_Email" name="email" class="validate[required,custom[email]]" />
		</div>

		<div class="form-field">
			<label for="telephone_Tel_Req">Telephone <strong>*</strong></label>
			<input type="text" id="telephone_Tel" name="telephone" class="validate[required]" />
		</div>

		<div class="form-field">
			<input type="submit" value="Submit" class="button" style="margin-left: 189px;"/>
		</div>
	</fieldset>
	<br/>
</form>
