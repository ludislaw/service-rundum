<?php
$sender = 'jovifa5349@brandoza.com';
$recipient = 'jovifa5349@brandoza.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
// function debug_to_console($data) {
//   $output = $data;
//   if (is_array($output))
//       $output = implode(',', $output);

//   echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $fname = $_POST['fname'];
//   $email = $_POST['email'];
//   $message = $_POST['message'];

//   $to = "jovifa5349@brandoza.com";
//   $subject = "New Message from $fname";
//   $headers = "From: $email\r\n";

//   debug_to_console($fname);
//   debug_to_console($email);
//   debug_to_console($message);
//   debug_to_console($to);
//   debug_to_console($subject);
//   debug_to_console($headers);
//   debug_to_console(mail($to, $subject, $message, $headers));
  
//   if (mail($to, $subject, $message, $headers)) {
//     echo "Message sent successfully!";
//   } else {
//     echo "Error sending message.";
//   }
// }
?>