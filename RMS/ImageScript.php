<?php
$name = $_POST['name'];
$price = $_POST['price'];
$image = file_get_contents($_FILES['image']['tmp_name']);

require 'sqlconnect.php'; 

$stmt = $con->prepare("INSERT INTO image( image,name,price) VALUES(?,?, ?)");
$stmt->bind_param('sss',$image,$name, $price,);
if($stmt->execute()==true) {
    echo "Image Uploaded Successfully! ";
} else {
    echo $stmt->error;
}    