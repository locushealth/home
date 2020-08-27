<?php

    $email_subject = "New Form Submission";

    $email_body = "hello";
 

    if(mail("vasudhagroup.3@gmail.com",$email_subject,$email_body,))
    {
      $msg = "Message Sent";

    echo $msg;
  }
    }
?>
