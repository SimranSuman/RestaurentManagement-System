<?php
include "./sqlconnect.php";
// "./utility.php";
session_start();
$name = $_POST['name'];
$people = $_POST['people'];
$tableno = $_POST['tableno'];
$time= $_POST['time'];
$date = $_POST['date'];
$price = $_POST['price'];
//$uid = $_SESSION['uid'];
//include "./sqlconnect.php";

$sql = "INSERT INTO reservation(name,people,tableno,time,date,price) VALUES ('$name','$people','$tableno','$time','$date','$price')";

if($con->query($sql)==true) {
    echo "Your table reserved is sucessfully!";
} else {
    echo $con->error;
}

$con->close();
?>