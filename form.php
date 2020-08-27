<?php
    error_reporting(-1);
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "vasudhagroup.3@gmail.com";

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n".
                   "User Message: $message.\n";

    $to = "vasudhagroup.3@gmail.com"

    $headers = "From $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";
    'X-Mailer: PHP/' . phpversion();

    if(mail($to,$email_subject,$email_body,$headers))
    {
      $msg = "Message Sent";

    echo $msg;
  }
    }

    header("Location: index.html");
?>
