<?php
header('Content-Type: application/json');
$message = "";
$input = file_get_contents('php://input');
$body = json_decode($input, true);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $message .= "Name : " . $body['name'] . "\r\n";
    $message .= "Email : " . $body['email'] . "\r\n";
    $message .= "How did you find me?  " . $body['message1'] . "\r\n";
    $message .= "Message : " . $body['message2'] . "\r\n";;
    $message = wordwrap($message, 70, "\r\n");
    $headers = 'From: ' . $body['email'] . "\r\n" .
        'Reply-To:  ' . $body['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if (mail('shadia.hamadeh@gmail.com', 'From Web Site : ', $message, $headers))
        $res = true;
    else
        $res = false;
}
echo json_encode($body);
