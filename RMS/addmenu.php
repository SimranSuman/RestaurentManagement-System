<?php

if(isset($_POST['uploadfile']))
{
$uploadfile = $_FILES['uploadfile']['name'];
$name = $_POST['name'];
$price = $_POST['price'];
}

include "./sqlconnect.php";

$sql = "INSERT INTO addmenu(uploadfile,name,price) VALUES ('$uploadfile','$name','$price')";

if($con->query($sql)==true) {
    move_uploaded_file($_FILES['uploadfile']['temp_name'], "$uploadfile");
    echo $_FILES['uploadfile'];
} else {
    echo $con->error;
}

$con->close();
?>