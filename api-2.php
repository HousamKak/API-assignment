<?php

// Get the variables from the postman
$a=$_POST["a"];

$b=$_POST["b"];
$c=$_POST["c"];
// Do the computations
$result=$a**3 + $b*$c - $a/$b;

// put the result in an array
$response=array("result"=>$result);
// return the json object
echo json_encode($response);

?>