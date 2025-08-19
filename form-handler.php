<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
 
  // You can save to DB or send email here
  echo "Thanks, $name! Your message was received.";
} else {
  echo "Invalid request.";
}
?>
 
