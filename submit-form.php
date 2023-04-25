<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$resume = $_POST['resume'];

// Set up the email
$to = 'your-email@example.com'; // replace with your email address
$subject = 'New job application: '.$position;
$message = "Name: $name\nEmail: $email\nPosition: $position\nResume: $resume";
$headers = 'From: '.$name.' <'.$email.'>';

// Send the email
mail($to, $subject, $message, $headers);

// Redirect to a thank-you page
header('Location: thank-you.html');
?>
