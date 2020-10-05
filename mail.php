<?php
header('Content-Type: application/json');
$message ="";
if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $message .= "Name : ".$_POST['name']."\r\n";
    $message .= "Email : ".$_POST['email']."\r\n";
    $message .= "How did you find me?  ".$_POST['message1']."\r\n";
    $message .= "Message : ".$_POST['message2']."\r\n";;
    $message = wordwrap($message, 70, "\r\n");
    $headers = 'From: ' .$_POST['email']. "\r\n" .
    'Reply-To:  '.$_POST['email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if(mail('shadia.hamadeh@gmail.com', 'From Web Site', $message,$headers))
    $res = true;

}
echo json_encode($res);
