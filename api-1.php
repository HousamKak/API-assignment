<?php

// Initialize the boolean variable to false
$isPalindrome=FALSE;  
// Get the string from the url
$string=$_GET['string'];
// Find the reverse string
$revString=strrev($string);
// Check if the string and its reverse are equal
if($string==$revString)
{
    // Upon equality change the boolean to true
    $isPalindrome=TRUE;
}
// put the result in an array
$response=array("is_palindrome"=>$isPalindrome);
// return the json object
echo json_encode($response);

?>