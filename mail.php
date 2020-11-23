<?php
header('Content-Type: application/json');
$message = "";
$input = file_get_contents('php://input');
$body = json_decode($input, true);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $services = "";
    if (isset($body['services']))
        $services = " for " . $body['services'];

    $subject = $body['subject'].$services;
    if (isset($body['name']))
        $message .= "Name : " . $body['name'] . "\r\n";

    if (isset($body['phone']))
        $message .= "phone : " . $body['phone'] . "\r\n";

    if (isset($body['email']))
        $message .= "Email : " . $body['email'] . "\r\n";

    if (isset($body['message1']))
        $message .= "How did you find me?  " . $body['message1'] . "\r\n";

    if (isset($body['Age']))
        $message .= "Age :  " . $body['Age'] . "\r\n";

    if (isset($body['message2']))
        $message .= "Message : " . $body['message2'] . "\r\n";

    $message = wordwrap($message, 70, "\r\n");

    $headers = 'From: ' . $body['email'] . "\r\n" .
        'Reply-To:  ' . $body['email'] . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if (mail('shadia.hamadeh@gmail.com', $subject, $message, $headers))
        $res = true;
    else
        $res = false;
}
echo json_encode($res);
