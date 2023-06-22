

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Superceuticals Engineering Healthcare</title>
		<?php include 'headlink.php';?>
	</head>
	<body>
		<!-- Header Area Start-->
		<?php include 'header.php';?>
		<!-- Header Area End -->
		<section class="InnerBanner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1>Contact Us</h1>
						<nav class="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>
		<section class="getContact">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="contentTitle">
						<h2>Find us easily</h2>
							<p>We want to share our location</p>
						</div>
						<div class="direction mt-4">
							<div class="icon">
								<i class="las la-map-marked-alt"></i>
							</div>
							<div class="subTitle">
								<h2>Our Address</h2>
								<p>19, InfoCity 2, Hero Honda Chowk, Sector 33, Gurgaon,<br>Haryana - 122001</p>
							</div>
						</div>
						<div class="direction">
							<div class="icon">
								<i class="las la-tty"></i>
							</div>
							<div class="subTitle">
								<h2>Our Phone</h2>
								<a href="tel:918860751566">+91-8860751566</a>
							</div>
						</div>
						<div class="direction">
							<div class="icon">
								<i class="las la-envelope-open-text"></i>
							</div>
							<div class="subTitle">
								<h2>Our Email</h2>
								<a href="mailto:info@superceuticals.in">info@superceuticals.in</a>
							</div>
						</div>
					</div>
				<div class="col-lg-6">
					<div class="contentTitle">
					<h2>Get in touch</h2>
					<p>Feel free to contact us</p>
					</div>
					<form class="homeForm mt-4" action="mail.php" method="post">
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input type="text" name="name" placeholder="Name" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input type="text" name="organization" placeholder="Organization" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input type="email" name="email" placeholder="Email ID" required>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<input type="tel" name="contact" placeholder="Contact">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="query" rows="3" placeholder="Query"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<input type="submit" name="submit" class="submit" value="Send a Message">
								</div>
							</div>
						</div>
					</form>
			</div>
		</section>
		<!-- Footer Area Start-->
		<?php include 'footer.php';?>
		<!-- Footer Area End-->
	</body>
</html>

