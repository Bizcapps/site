<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>Sign UP : Education Management System - Cloud based solution for Education Management System</title>
		<meta name='description' content='Bizcapps education management system, is a cloud solution can be used by education or organizations of any kind from small schools to universities, it is reinvented with the following features, Organization Management, Branch Management, Student portal, Parents portal, Empoyee portal , Financal Module, Admissions , Attendance, Notifications, Scheduling, User Management , Exams Management, Progress Reports, Transcripts, Homework' />
		<meta name='keywords' content='bizcapps.com,education management system, college management system, school management system,school information system,online school management system,online school information system,online school administration software,school administration software,student information system,student management system'/>
		<meta name="google-site-verification" content="uBe0AaVF6cSTiEtOxF8d9_BDM_V_D0kbJ38CCrk8ZlQ" />

		<link rel="stylesheet" href="css/styles.css" />

		<link href="css/form-reset.css" rel="stylesheet" type="text/css">

		<link href="css/form-styles.css" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="css/validationEngine.jquery-blue.css" type="text/css"/>
		
		<script src="//cdn.optimizely.com/js/79312823.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

		<script src="scripts/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>

		<script src="scripts/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

		<script type="text/javascript">
			jQuery(document).ready(function() {

				// binds form submission and fields to the validation engine
				jQuery("#signupForm").validationEngine();

			});
		</script>

	</head>
	<body>

		<!-- Begin Header -->
		<?php
		include ('./includes/header.php');
		?>

		<!-- Begin Subnav -->

		<div class="wrap mid" style="background: #1B7A49">
			<div class="wrap-inner">
				<div class="subnav">
					<ul>
						<li>
							<a href="./signup.php">Signup</a><span style="background: #1B7A49;"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- End Subnav -->

		<!-- Begin Content -->
		<div class="wrap" id="content">
			<div class="wrap-inner">
				<div id="contact">

					<!--h1 class="page-title" style="margin-bottom: 0px;"><span>Contact Us</span></h1-->

					<?php
					if ($_GET["submitPlan"] != null) {
						include ('signup-confirm.php');
					} else {
						include ('signup-form.php');
					}
					?>

					<div class="clear">
						&nbsp;
					</div>

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
