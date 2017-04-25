<h1 style="float: left;margin-left: 20px;font-size: 24px;">If you have any questions...</h1>
<p style="float: left;margin-left: 20px;margin-bottom: 10px;">
	Just fill out your details in the form below along with your enquiry, we'll get back to you as soon as we can.
</p>
<form action="contact.php?submit=enquiry" method="post" id="enquiryForm">
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
			<label for="subjet_Req" style="white-space: nowrap">Subject <strong>*</strong></label>
			<input type="text" id="sibject_Req" name="subject" class="validate[required]" />
		</div>

		<div class="form-field" style="height: 80px;">
			<label for="message_Req">Message <strong>*</strong></label>
			<textarea id="message_Req" name="message" rows="5" cols="20" class="validate[required]"></textarea>
		</div>
		<div class="form-field">
			<input type="submit" value="Submit" class="button" style="margin-left: 189px;"/>
		</div>
	</fieldset>
	<br/>
</form>
