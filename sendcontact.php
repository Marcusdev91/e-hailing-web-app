<?php

if(isset($_POST["submit"])){
 $name = $_POST["name"];
 $email = $_POST["email"];
 $message = $_POST["message"];
$subject = $_POST["subject"];
    $mailTo = "info@maicab.co.za";
    $headers = "From    ".$email;
    $txt = "You have received an e-mail from    ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsent");
    
}else{
    echo 'message not sent';
}