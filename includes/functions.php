<?php

// Email functions starts...  


function contactform ($to, $subject, $body, $headers) {

$bodyname = "<div style='float:left;'>" ."Hi FutsalElite, <br><br> " . "<div>"; 

$to = "FutsalElite Enquiries <krickelsford@futsalelite.co.uk>";
$subject = "An Enquiry"; 
$message = $_POST['message']; 

$footer =  "<br><br>I look forward to your reply." . "<br><br>" . $_POST['name'] . "<br>" . $_POST['email'];


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "Cc:" . $_POST['email'] . "\r\n";
    $headers .= "From:" . $_POST['email'] . "\r\n";


  $body = $bodyname . $message . $footer;  

  mail($to, $subject, $body, $headers);


}


function subscribe ($to, $subject, $body, $headers) {

$bodyname = "<div style='float:left;'>" ."Hi FutsalElite, <br><br> " . "<div>"; 

$to = "FutsalElite Enquiries <krickelsford@futsalelite.co.uk>";
$subject = "Newsletter Subscription"; 
$message = "I would like to subscribe to your newsletter campaign.
<br><br> please contact me using the details provided below: <br>" . $_POST['name'] . "<br>" . $_POST['email'];  
$footer =  "<br><br>Thank you. <br><br> Regards, <br><br>" . $_POST['name'];


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= "Cc:" . $_POST['email'] . "\r\n";
    $headers .= "From:" . $_POST['email'] . "\r\n";


  $body = $bodyname . $message . $footer;  

  mail($to, $subject, $body, $headers);


}


// Email functions ends 


?>
