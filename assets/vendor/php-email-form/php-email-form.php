<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];
  
  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
    exit;
  }

  // Set the recipient email address
  $to = "benmwanzia440@gmail.com";

  // Set the subject of the email
  $subject = "Contact Form Submission from $name";

  // Compose the email message
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Phone: $phone\n";
  $message .= "Message:\n$message";

  // Additional email headers
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
