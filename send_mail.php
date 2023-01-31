<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "vladderevo2004@gmail.com";
  $subject = "New Message from $fname";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>