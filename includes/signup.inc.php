<?php

if(isset($_POST['submit'])){
    
   $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd= $_POST['pwd'];
     $repeatpwd = $_POST['repeatpwd'];
    
    require_once 'dbcon.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputSignup($email,$firstname,$lastname,$pwd,$repeatpwd) !== false){
        header("location: ../sign_up.php?error=emptyinput");
        exit();
      }
       
        if(emailInvalid($email) !== false){
        header("location: ../sign_up.php?error=invalidemail");
        exit();
    }
    
     if(pwdMatch($pwd,$repeatpwd) !== false){
        header("location: ../sign_up.php?error=passworddontmatch");
        exit();
    }
    
         if(dbMatchElem($mycon,$firstname,$email) !== false){
        header("location: ../sign_up.php?error=nametaken");
        exit();
            }
    createUser($mycon, $firstname,$lastname,$email,$pwd);
             
    }
    

    
   


else{
    header("location: ../sign_up.php");
    exit();
        
    
    
}
