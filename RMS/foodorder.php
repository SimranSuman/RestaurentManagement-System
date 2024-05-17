<?php
session_start();
$Reg_id = $_POST['Reg_id'];
$img = $_POST['img'];
$item_name = $_POST['item_name'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$totalprice = $_POST['totalprice'];

include "./sqlconnect.php";

$sql = "INSERT INTO foodorder(Reg_id, img ,item_name ,qty ,price ,totalprice) VALUES ('$Reg_id','$img','$item_name','$qty','$price','$totalprice')";

if($con->query($sql)==true) {
    echo "Data insert sucessfully!";
} else {
    echo $con->error;
}

$con->close();
?>