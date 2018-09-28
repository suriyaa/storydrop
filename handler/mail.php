<?php
/**
 * @package Contact
 */

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Website: $website \n Type: $type \n Message: $message";
$recipient = "suriyaasundararuban@gmail.com";
$subject = "StoryDrop - Contact Form Message from $email";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for submitting your StoryDrop message. You can expect a response in a week.<br /><br /><a href='index.php' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
