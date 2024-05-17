<?php
session_start();
$username = $_SESSION['username'];
//-----fetching existing order details ------
//$R_id= null;
//$name= null;
//$people = null;
//$tableno = null;
//$time = null;
//$date= null;
//$price = null;
//$statu= null;

require_once 'sqlconnect.php';
$sql = "SELECT * FROM reservation WHERE name='$username'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

if (isset($_POST['cancle'])) {
    $R_id = $_POST['R_id'];
    $name = $_POST['name'];
    $people = $_POST['people'];
    $tableno = $_POST['tableno'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $statu = $_POST['statu'];

    include 'sqlconnect.php';
    $sql = "UPDATE reservation set statu='C' where R_id ='$R_id'";
    if ($con->query($sql) == true) {
        echo " Your Reservation has cancled!";
    } else {
        echo $con->error;
    }
}

?>