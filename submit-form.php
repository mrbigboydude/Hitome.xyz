<?php

$name = $_POST['name'];
$email = $_POST['email'];
$position = $_POST['position'];
$resume = $_POST['resume'];


$to = 'hitome.xyz@gmail.com'; 
$subject = 'New job application: '.$position;
$message = "Name: $name\nEmail: $email\nPosition: $position\nResume: $resume";
$headers = 'From: '.$name.' <'.$email.'>';


mail($to, $subject, $message, $headers);


header('Location: thank-you.html');
?>
