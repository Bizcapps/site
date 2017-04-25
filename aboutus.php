<!DOCTYPE html>
<html lang="en">

	<!-- head -->

	<?php
	$title = 'Aboutus | bizcapps\'s';
	include ('./includes/head.php');
	?>

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
				<!--h1 class="page-title"><span>A Word From Us</span></h1-->
				<article>
					<p>
						If you are considering buying an  educational management system for your school, college, engineering college or post graduation college, or have bought one, <strong class="highlight">you MUST read this.</strong>
					</p>
					<p>
						We are sure, you have heard or seen an educational institution has just purchased a cutting-edge software to manage there organization. They spent lot of money, and now they're online. Everything's just peachy and connected.
					</p>
					<p>
						Often times, you'll find that everything not that great. <strong style="color:#2D4CB1">Instead of spending less time grading students, teachers end up spending more time trying to navigate complicated software.</strong> Information that is supposed to be retrievable at the click-of-a-button turns out to be not available or may be they say that the feature could be available in the next release.
					</p>
					<p>
						Unforeseen circumstances has just doubled the cost from the original estimate. Then there are the hardware problems: hearing the server is down on a weekly basis. Having to key in data all over again when data disappears. Performance issues. Everything adds up to frustration, lost time, and disillusionment over the technology promise.
					</p>
					<p>
						<strong style="color:green">We will take care of everything.</strong> You just use the system.
					</p>
					<p>
						Bizcapps's educational management system, unlike other educational management systems, works on an entirely different model. You don't need to install hardware and software, you don't need to manage backups, nothing like that. We manage all of that on our end. <strong style="color:#2D4CB1">Simply connect via the Internet</strong> to your school or college site. Log-in, and you're up and running. In fact, by <a href="./pricing.php">filling in a simple form right now</a>, we can provide you access to a demo account in minutes.
					</p>
					<p>
						Can you imagine that? Up and running in minutes. But you're probably dreading keying in the data(Student information , Employee information, etc.) you already have. Don't worry, bizcapps educational management system comes with import functionality out of the box. You can easily import the data by uploading the spreadsheets in the requested format and it will bring all your data into your system. <a href="./pricing.php">Ready to sign up for a demo account?</a>
					</p>
					<ul>
						<li>
							<strong>Pay absolutely nothing up front.</strong>That's right. Get started without paying a cent.
						</li>
						<li>
							You can try out the system for <strong>30 days. Absolutely free.</strong>
						</li>
						<li>
							<strong>Cancel at any time.</strong>You are not locked in to any annual contracts.
						</li>
					</ul>

					<p>
						See more details on the <a href="./pricing.php">Pricing</a> page.
					</p>
					<p>
						That's it. Life's good, isn't it? So hey, why don't you give it a go and <a href="./pricing.php"><strong>sign-up for a free demo account</strong></a>.
					</p>
					<p>
						Still got questions? Here are some more details about the <b>bizcapps's educational management system:</b>
					</p>
					<p>
						1. <strong>It's intuitive and easy-to-use</strong> - Professors, Lecturers and Teachers  find our software a joy to use, and they can't live without it once they've started.
					</p>
					<p>
						2. <strong>It's reinvented with state-of-the-art features</strong> -  Management, Parents , Employees and Students can access any information in a single click..
					</p>
					<p>
						3. <strong>Training</strong> - All Professors, Lecturers , Teachers, Administrators, Parents and Students who use the system have 24-hour access to training material, all for free. Guided walkthroughs integrated right within the system tell your users what to do, step-by-step. No need to pay for expensive training. Our professional trainers will give you a free training session on the product in your school or college.
					</p>
					<p>
						4. <strong>Continuous upgrades</strong> - We continuously update and upgrade the bizcapps's educational management system with the latest best practices, which you receive automatically. This will help your school keep up with the rapidly changing technical landscape without any extra effort on your part.
					</p>
					<p>
						5. <strong>Support</strong> - Our technical support can assist you with any technical problems you may face. Support is provided by webex, email and phone.
					</p>
					<p>
						<a href="mailto:vamsi@bizcapps.com">Vamsi Kurukuri</a>
						<br />
						<em>Founder, CEO, bizcapps.</em>
					</p>

				</article>

				<section>

					<div class="social-widget">
						<h4>Follow Us</h4>

						<a href="https://www.facebook.com/bizcapps" target="_blog" id="blog-item">
						<div class="post">
							<div class="social-icon">
								<img src="images/facebook-icon.png"  width="40" height="40"/>
							</div>
							<h6 class="blog-title">Facebook</h6>
						</div> </a>

						<a href="https://twitter.com/bizcapps" target="_blog" id="blog-item">
						<div class="post">
							<div class="social-icon">
								<img src="images/twitter-icon.png"  width="40" height="40"/>
							</div>
							<h6 class="blog-title">Tweeter</h6>
						</div> </a>

					</div>

					<div class="email-widget">
						<h4>Newsletter</h4>
						<p>
							Signup for our email newsletter to stay in the loop and recieve the latest updates. Just enter your email address below!
						</p>

						<form action='' method='post' id='mad_mimi_signup_form'>

							<span id="email-error" class="validation-error">We need a valid email here.</span>

							<input id='signup_email' name='signup[email]' type='text' placeholder='Email Address' class='required'>
							<input id="newsletter-submit" type="button" value="Signup" class="email-submit" onclick="checkEmail();"/>

						</form>

						<script src="./scripts/newEmailValidation.js"></script>

						<script>
							function checkEmail() {

								if (window.verifyEmail != null) {
									var result = verifyEmail($("#signup_email").val());
									if (!result) {
										$("#email-error").css("display", "block");
										return;
									}
								}

								$("#email-error").css("display", "none");

								$("#mad_mimi_signup_form").submit();
							}
						</script>

						</divS>

				</section>
			</div>
		</div>
		<!-- End Content -->

		<!-- Footer -->
		<?php
		include ('./includes/footer.php');
		?>
	</body>
</html>

