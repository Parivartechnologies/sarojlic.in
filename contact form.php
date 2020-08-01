<?php
//chane to your email $to
$to = "yogeshsaxena23@gmail.com</h2>";
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//change header email from and reply to
$headers = 'From: Jai Shri Ram Sena <Website>' . "\r\n" .
           'Reply-To: yogeshsaxena23@gmail.com' . "\r\n" .
           'X-Mailer: PHP' . phpversion();
$subject = "Response from website";
$body = "You have received following details:";
$body .="\r\nVisitor Name: " . $name;
$body .="\r\nVisitor Email: " . $email;
$body .="\r\nVisitor Phone no: " . $phone;
$body .="\r\nVisitor Subject: " . $subject;
$body .="\r\nVisitor Message: " . $message;

if (mail($to,$subject,$body,$headers)){
    echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
}   else {
    echo 'Sorry, could not process submission.</br><a href="index.html">Go Back</a>';
}




?>