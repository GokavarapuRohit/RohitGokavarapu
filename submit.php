<?php

// Replace with your recipient email address
$recipient = "gokavarapurohit1998@gmail.com";

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$time = $_POST["time"];
$message = $_POST["message"];

// Construct email content
$subject = "Appointment Booking from Website";
$body = "Name: $name \n";
$body .= "Email: $email \n";
$body .= "Phone: $phone \n";
$body .= "Preferred Date: $date \n";
$body .= "Preferred Time: $time \n";
$body .= "Additional Message: \n$message";

// Send email using PHP mail function
$mail_sent = mail($recipient, $subject, $body);

if ($mail_sent) {
  echo "Your appointment request has been submitted successfully!";
} else {
  echo "Error sending email. Please try again later.";
}

?>
