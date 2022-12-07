<?php
  
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'info@impressioncliks.com';

  
  $to = $receiving_email_address;
  $subject = $_POST['subject'];
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $message = '<b>Hi,</b>';
  $message .= "Name".$from_name;
  $message .= "Message".$_POST['message'];     
  $header = "From:".$from_email."\r\n";
  $header .= "MIME-Version: 1.0\r\n";
  $header .= "Content-type: text/html\r\n";
         
  $mail = mail ($to,$subject,$message,$header);
         
  if($mail == true ) {
    echo "OK";
  }else {
    echo "Message could not be sent...";
  }
?>
