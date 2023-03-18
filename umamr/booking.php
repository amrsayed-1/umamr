<?php
  if($_POST){
    $to_email = "your-email@example.com";
    $subject = "Table Booking Request";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $comments = $_POST['comments'];

    $message = "Name: " . $name . "\r\n";
    $message .= "Email: " . $email . "\r\n";
    $message .= "Phone: " . $phone . "\r\n";
    $message .= "Date: " . $date . "\r\n";
    $message .= "Time: " . $time . "\r\n";
    $message .= "Number of guests: " . $guests . "\r\n";
    $message .= "Comments: " . $comments . "\r\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    mail($to_email,$subject,$message,$headers);
  }
?>