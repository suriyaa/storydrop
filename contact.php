<?php 
include('config.php');
$pageName = 'contact';
$pageTitle = 'Contact';
include('./includes/header.php');
?>

	<form action="handler/mail.php" method="POST">
		<fieldset>
			<legend>Contact Information</legend>
			<p>Name (required)</p> <input type="text" name="name" placeholder="Type your name here...">
			<p>Email (required)</p> <input type="text" name="email" placeholder="Type your e-mail address here...">
		</fieldset>
		<br />
		<fieldset>
		<legend>Other Information</legend>
			<p>Website</p> <input type="text" name="website" placeholder="Type your website here...">
			<br />
		</fieldset>
		<br />
		<fieldset>
			<p>Type (required)</p>
			<select name="type" size="1">
			<option value="update">Feedback</option>
			<option value="change">DMCA Report</option>
			<option value="addition">Report Issue</option>
			<option value="new">Feature Request</option>
			</select>
			<legend>Your Message</legend>
			<p>Message (required)</p><textarea name="message" rows="8" cols="29"  placeholder="Type your text message here..."></textarea><br />
			<input type="submit" value="Send"><input type="reset" value="Clear">
		</fieldset>
	</form>

	<!-- Critical CSS Rendering -->
	<link rel="stylesheet" type="text/css" href="assets/css/mail.css?v=1" />
<?php include('./includes/footer.php'); ?>
