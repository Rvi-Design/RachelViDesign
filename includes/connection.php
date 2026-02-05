<?php 
$server = "sh-cp39";
$username = "rache827_Admin";
$password = "?kP7]tP9m0_kwZ2%";
$database = "rache827_rachelvidesign";

$connection = mysqli_connect($server,$username,$password,$database);
// Varianble need to be IN THAT ORDER or this will not work!
if(!$connection){
    die(mysqli_connect_error());
}

?>