<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<title>Contact : Education Management System - Cloud based solution for Education Management System</title>
		<meta name='description' content='Bizcapps education management system, is a cloud solution can be used by education or organizations of any kind from small schools to universities, it is reinvented with the following features, Organization Management, Branch Management, Student portal, Parents portal, Empoyee portal , Financal Module, Admissions , Attendance, Notifications, Scheduling, User Management , Exams Management, Progress Reports, Transcripts, Homework' />
		<meta name='keywords' content='bizcapps.com,education management system, college management system, school management system,school information system,online school management system,online school information system,online school administration software,school administration software,student information system,student management system'/>
		<meta name="google-site-verification" content="uBe0AaVF6cSTiEtOxF8d9_BDM_V_D0kbJ38CCrk8ZlQ" />

		<link rel="stylesheet" href="css/styles.css" />

		<link href="css/form-reset.css" rel="stylesheet" type="text/css">

		<link href="css/form-styles.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>

		<script src="//cdn.optimizely.com/js/79312823.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<script src="scripts/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

		<script src="scripts/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript">
			jQuery(document).ready(function() {

				// binds form submission and fields to the validation engine
				jQuery("#enquiryForm").validationEngine();

			});
		</script>

	</head>
	<body>

		<!-- Begin Header -->
		<?php
		include ('./includes/header.php');
		?>

		<!-- Begin Subnav -->

		<?php
		include ('./includes/sub-nav.php');
		?>

		<!-- End Subnav -->

		<!-- Begin Content -->
		<div class="wrap" id="content">
			<div class="wrap-inner">
				<div id="contact">

					<!--h1 class="page-title" style="margin-bottom: 0px;"><span>Contact Us</span></h1-->

					<div class="box-form">

						<?php
						if ($_GET["submit"] != null) {
							include ('enquiry-confirm.php');
						} else {
							include ('enquiry-form.php');
						}
						?>

						<div class="clear">
							&nbsp;
						</div>

					</div>
					<section>

						<div class="contact-widget">
							<h4>Contact Us</h4>

							<div class="post">
								<div class="social-icon">
									<img src="images/address_web_icon.png"  width="40" height="56"/>
								</div>
								<h6 class="blog-title">4408 Caledonia Creek LN
								<br/>
								Plano, TX 75024</h6>
							</div>
							<div class="post">
								<div class="social-icon">
									<img src="images/phone-icon.png"  width="40" height="40"/>
								</div>
								<h6 class="blog-title">+1-904-416-6192</h6>
							</div>
							<a href="mailto:info@bizcapps.com">
							<div class="post">
								<div class="social-icon">
									<img src="images/email-icon.png"  width="40" height="40"/>
								</div>
								<h6 class="blog-title">info@bizcapps.com</h6>
							</div> </a>
					</section>
				</div>
			</div>
		</div>
		<!-- End Content -->

		<!-- Footer -->
		<?php
		include ('./includes/footer.php');
		?>

	</body>
</html>
