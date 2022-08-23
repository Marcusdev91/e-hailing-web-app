<?php

function emptyInputSignup($firstname,$lastname,$email,$pwd,$repeatpwd){
    
    $result;
    
    if(empty($firstname) || empty($lastname) || empty($email) || empty($pwd)|| empty($repeatpwd)){
        $result = true;
    }else{
        $result =false;
    }
    return $result;
}

    function emailInvalid($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }



    function pwdMatch($pwd,$repeatpwd){
        $result;
        if($pwd !== $repeatpwd){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    

function dbMatchElem($mycon,$firstname,$email){
    
    $sql = "SELECT * FROM users WHERE user_first_name = ? OR user_email = ?;";
    $stmt = mysqli_stmt_init($mycon);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../sign_up.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt,"ss",$firstname,$email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row=mysqli_fetch_assoc($resultData)){
        
        return $row; 
        
    }else{
        $result= false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}




function  createUser($mycon, $firstname,$lastname,$email,$pwd){
    
    $sql = "INSERT INTO users (user_first_name,user_last_name,user_email,user_pwd) VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($mycon);
    if(!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../sign_up.php?error=stmtdbfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$firstname,$lastname,$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);
    header("location: ../sign_up.php?error=none");
}


function emptyInputLogin($email,$pwd){
    
    $result;
    
    if( empty($email) || empty($pwd) ){
        $result = true;
    }else{
        $result =false;
    }
    return $result;
}


function loginUser($mycon,$email,$pwd){
    
    $dbMatchElem = dbMatchElem($mycon,$email,$email);
    if($dbMatchElem == false){
        header("location:../sign_in.php?error=wrongemail");
        exit();
    }
    
    $pwdHashed = $dbMatchElem["user_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if($checkPwd === false){
        header("location:../sign_in.php?error=wrongpassword");
        exit();
    }
    
    else if($checkPwd === true){
        session_start();
        $_SESSION["user_first_name"] = $dbMatchElem["user_first_name"];
       
         header("location:../index.php");
        exit();
    }
}

