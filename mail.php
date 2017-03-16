<?php


$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$to_address = 'thematrixclan@gmail.com'; 
$subject = $name - 'The Matrix Has Me';
$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/plain; charset=iso-8859-2\n";
$headers .= "From: $email\n" . "Reply-To: $email\n" 
  . "X-Mailer: PHP/" . phpversion() . "\n";

mail($to_address, $name, $comment, $headers);

echo 'We have succesfully received your message. Thank You for contacting us. <a href="contact.html">Go back</a>'

?>
