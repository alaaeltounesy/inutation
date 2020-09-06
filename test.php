<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'));
if($data->action == "add"){
    $txt = 1;
    $myfile = fopen("webdictionary.txt", "a+") or die("Unable to open file!");
    $line =  fgets($myfile);
    echo  $line;
    $txt =(int) $line+(int)$txt;
    fclose($myfile);
    $myfile = fopen("webdictionary.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
}else if($data->action == "remove"){
    $txt = 1;
    $myfile = fopen("webdictionary.txt", "a+") or die("Unable to open file!");
    $line =  fgets($myfile);
    echo  $line;
    $txt =(int) $line-(int)$txt;
    fclose($myfile);
    $myfile = fopen("webdictionary.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, $txt);
    fclose($myfile);
}
echo json_encode($data);
