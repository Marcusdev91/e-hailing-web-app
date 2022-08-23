<?php

if(isset($_POST["reset-request-submit"])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    
    $url ="www.maicab.co.za/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 1800;
    
    $require 'dbcon.inc.php';
    
    $userEmail = $_POST["email"];
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
    $stmt = mysql_stmt_init($mycon);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();    
    }
    else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt)
        
    }
    
    $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetSelector, pwdResetToken) VALUES(?,?,?,?);";
    
     $stmt = mysql_stmt_init($mycon);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();    
    }
    else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt)
        
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close();
    
    $to = $userEmail;
    
    $subject = 'Reset your password';
    $message = '<p>We received a password reset request. The link to reset your password make this request, you can ignore this email</p>';
    $message .='<p>Here is your password reset link: </br>';
    $message .='<a href="' .$url . '">' . $url . '</a></p>';
    
    $headers = "From: maicab <info@maicab.co.za>\r\n";
    $headers .= "Reply_To: info@maicab.co.za\r\n";
     $headers .= "Content-type: text/html\r\n";
    
    mail($to, $subject,$message, $headers);
    header("Location: ../forgotpassword.php?reset=success");
    
}else{
    header("Location: ../index.php");
}