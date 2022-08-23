<?php

if(isset($_POST["submit"])){
    $email = $_POST['email'];
     $pwd= $_POST['pwd'];
    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';
    
     if(emptyInputLogin($email,$pwd) !== false){
        header("location: ../sign_in.php?error=emptyinput");
        exit();
      }
    
    loginUser($mycon,$email,$pwd);
}
else{
    header('location:../sign_in.php?error=emptyinput');
    exit();
}

