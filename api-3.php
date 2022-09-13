<?php
// Initializing variales
$is_weak=FALSE;
$reason="strong";
// Getting the password
$pass=$_POST["pass"];

// Checking if the password length is less than 12
if(strlen($pass)<12){
    $is_weak=TRUE;
    $reason="password less than 12 characters";
}

// Checking if the password contains at least 1 uppercase letter
if(!preg_match('/[A-Z]/', $pass)){
    $is_weak=TRUE;
    $reason="password should contain at least 1 uppercase letter";
   }

//  Checking if the password contains at least 1 lowercase letter
if(!preg_match('/[a-z]/', $pass)){
    $is_weak=TRUE;
    $reason="password should contain at least 1 lowercase letter";
   }

//   Checking if the password contains at least 1 digit
if(!preg_match('/[0-9]/', $pass)){
    $is_weak=TRUE;
    $reason="password should contain at least 1 digit";
   }

//   Checking if the password contains at least 1 symbol
if(!preg_match('/[-+_!@#$%^&*.,?]/', $pass)){
    $is_weak=TRUE;
    $reason="password should contain at least 1 symbol";
   }

// put the result in an array
$response=array("is_weak"=>$is_weak,"reason"=>$reason);
// return the json object
echo json_encode($response);



?>