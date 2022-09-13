
<?php
// use \Datetime;
// Get the wanted Date you want to know how many days are left to
$DaysLeftTo=$_GET["WantedDate"];
// Find the now date
$NOW = new DateTime('now');
// IF chrismas was written, change to the actual date
if ($DaysLeftTo=="chrismas"){
    $DaysLeftTo='2022-12-25';
}
$Destination_date = new DateTime($DaysLeftTo);

// Finding the difference
$difference=$NOW->diff($Destination_date);

?>