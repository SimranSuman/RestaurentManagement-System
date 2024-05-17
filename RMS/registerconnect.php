<?php
$username = $_POST['username'];
$email_id = $_POST['email_id'];
$mobile_no = $_POST['mobile_no'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];

include "./sqlconnect.php";

$sql = "INSERT INTO register(username, email_id, mobile_no, pass,dob) VALUES ('$username','$email_id','$mobile_no','$pass','$dob')";

if($con->query($sql)==true) {
    echo "Data insert sucessfully!";
} else {
    echo $con->error;
}

$con->close();
?>