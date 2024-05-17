<?php
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

include "./sqlconnect.php";

$sql = "INSERT INTO contact(name,number,email,subject,message) VALUES ('$name','$number','$email','$subject','$message')";

if($con->query($sql)==true) {
    echo "Your message send sucessfully!";
} else {
    echo $con->error;
}

$con->close();
?>