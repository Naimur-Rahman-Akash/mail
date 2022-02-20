<?php
require_once("PHPMailer.php");
require_once ("Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$pm = new PHPMailer(true);
try{
    $pm ->setFrom("akash66445@gmail.com");
    $pm ->addAddress("naimur404cse@gmail.com");
    $pm ->Subject= "here is invoice test 2";
    $pm->Body= "<strong>Hi kmon asoo<strong>";
    $pm ->AltBody= "life onk pera";
    $pm->isHTML(true);
    $pm -> addAttachment("\laragon\www\mail\smtp.php");
    $pm ->send();
    
    echo "mail send";
}catch( Exception $e){
    echo "failed",$pm->ErrorInfo;
}
?>