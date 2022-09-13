
<?php
// use \Datetime;
// Get the wanted Date you want to know how many days are left to
$DaysLeftTo=$_GET["WantedDate"];
// Find the now date
$NOW = new DateTime('now');
$NOW=$NOW->format('Y-m-d');
// IF chrismas was written, change to the actual date
if ($DaysLeftTo=="chrismas"){
    $DaysLeftTo='2022-12-25';
}
// Finding Destination date and changing into Y-m-d format
$Destination_date = new DateTime($DaysLeftTo);
$Destination_date=$Destination_date->format('Y-m-d');

// Finding the difference in time
$difference=strtotime($Destination_date) - strtotime($NOW);
// 1 day = 24 hours
// 24 * 60 * 60 = 86400 seconds
$days=abs(round($difference / 86400));

// put the result in an array
$response=array("days"=>$days);
// return the json object
echo json_encode($response);

// ?>