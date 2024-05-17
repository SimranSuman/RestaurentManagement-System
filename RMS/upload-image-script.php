<?php
$name = "chowmin";
$price = "50";
require './sqlconnect.php';
$result = $con->query("SELECT `image` FROM `image` WHERE `name`='$name'");
//if(!$result)
   // echo "false";

 $img = $result->fetch_assoc();
$img = $img["image"];

// (C) BASE 64 ENCODE TO OUTPUT TO <IMG> TAG
 $img = base64_encode($img);
 $ext = pathinfo($name, PATHINFO_EXTENSION);
 echo "<img src='data:image/".$ext.";base64,".$img."'/>";
?>