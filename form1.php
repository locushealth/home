<?php
$to = "vasudhagroup.3@gmail.com";
$subject = "lol";
$message = "lol2";
$headers = "Frome:vasudhagroup.3@gmail.com";

if (mail("vasudhagroup.3@gmail.com",$email_subject,$email_body)) {
    echo "Mail Sent";
}   else  {
    echo "Cannot Send";
}

?>
