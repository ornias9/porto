<!DOCTYPE html>
<html>
<head>
	<title>bhuvaneshwor</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<?php include 'includes/header_feedback.php' ?>

	<main>
		<div class="center clearfix">
			<article>
				<h1>
					<span class="clearfix">
						<ins>Write to us.</ins>
					</span>
					<strong>feedback.  inquiry.  order.</strong>
				</h1>

				<form method="post">
					<div>
						<input type="text" name="Full Name" placeholder="Full Name:" size="25">
						<input type="text" name="Address" placeholder="Address:" size="35">
					</div>
					<div>
						<input type="text" name="Country" placeholder="Country:">
						<input type="text" name="Company" placeholder="Company:" size="35">
					</div>
					<div>
						<input type="text" name="Email" placeholder="Email:" size="40">
						<input type="text" name="Phone/Mobile" placeholder="Phone/Mobile:">
					</div>
					<div>
						<select>
							<option>Subject</option>
							<option>Feedback</option>
							<option>Inquiry</option>
							<option>Order</option>
						</select>
					</div>
					<div>
						<textarea placeholder="Message:"></textarea>
					</div>
					<div>
						<input type="submit" value="Send Message" >
					</div>
				</form>
			</article>



			<!-- contact part -->
			<?php include 'includes/aside.php' ?>
		</div>
	</main>

	<!-- below nav & footer -->
	<?php include 'includes/footer_feedback.php' ?>
	<?php include 'includes/owl.php' ?>
	


</body>
</html>