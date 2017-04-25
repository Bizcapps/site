<!DOCTYPE html>
<html lang="en">
	<!-- head -->

	<?php
	$title = 'Pricing | bizcapps\'s';
	include ('./includes/head.php');
	?>

	<body>

		<!-- Begin Header -->
		<?php

		include ('./includes/header.php');
		?>

		<div class="wrap mid" style="background: #1B7A49">
			<div class="wrap-inner">
				<div class="subnav">
					<ul>
						<li>
							<a href="./pricing.php">Pricing</a><span style="background: #1B7A49;"></span>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Begin Content -->
		<div class="wrap">
			<div class="wrap-inner">
				<div id="price-wrap" style="margin-top: 20px;">
					<a href="./signup.php?plan=basic">
					<div class="plan" id="gaia">
						<div class="plan-header plan-header-green">
							<h1>Basic plan</h1>
						</div>
						<h2 id="green">$2.49
						<br/>
						<span>per student per year.</span></h2>
						<h3 id="green">Features include:</h3>
						<div class="signup-lrg gaia-sml" style="background-color: #048528;">
							Sign Up<span><img src="../images/arrow.png"></span>
						</div>
						<h3 id="green">30 Day Free Trial</h3>
						<ul id="pricing">
							<li class="bottom-line">
								Organization Management
							</li>
							<li class="bottom-line">
								Create limited branchs
							</li>
							<li class="bottom-line">
								Employee portal
							</li>
							<li class="bottom-line">
								User management
							</li>
							<li class="bottom-line">
								online admissions
							</li>
							<li class="bottom-line">
								Financial module
							</li>
							<li class="bottom-line">
								Exams management
							</li>
							<li class="bottom-line">
								Email and SMS Notifications
							</li>
							<li class="bottom-line">
								Static/Dynamic Reports
							</li>
							<li class="bottom-line">
								Phone & Email Support
							</li>
						</ul>
					</div> </a>

					<a href="signup.php?plan=enterprice">
					<div class="plan" id="apollo">
						<div class="plan-header plan-header-blue">
							<h1>Enterprise plan</h1>
						</div>
						<h2 id="blue">$3.99
						<br/>
						<span>per student per year.</span></h2>
						<h3 id="blue">Features include everything
						<br/>
						in the <font color="#9ecc49">Basic</font> plan, plus:</h3>
						<div class="signup-lrg apollo-sml" style="background-color: #004E96;">
							Sign Up<span><img src="../images/arrow.png"></span>
						</div>
						<h3 id="blue">30 Day Free Trial</h3>
						<ul id="pricing">
							<li class="bottom-line">
								Create unlimited branchs
							</li>
							<li class="bottom-line">
								Parent portal
							</li>
							<li class="bottom-line">
								Student portal
							</li>
							<li class="bottom-line">
								Parent messaging**
							</li>
							<li class="bottom-line">
								Scheduled messaging**
							</li>
							<li class="bottom-line">
								Student messaging**
							</li>
							<li class="bottom-line">
								Student progress charts/reports
							</li>
							<li class="bottom-line">
								Transcripts
							</li>
							<li class="bottom-line">
								Discipline tracking
							</li>
							<li class="bottom-line">
								Additional reports
							</li>
							<li class="bottom-line">
								Professional training
							</li>
						</ul>
						<br/>
					</div> </a>

				</div>
			</div>
		</div>

		<!-- Begin Clear Block -->
		<div id="clear"></div>

		<!-- Footer -->
		<?php
		include ('./includes/footer.php');
		?>
	</body>
</html>
