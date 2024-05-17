<?php
session_start();
$uid = $_SESSION['uid'];
//-----fetching existing order details ------

require_once 'sqlconnect.php';
$sql = "SELECT * FROM foodorder WHERE Reg_id='$uid'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
if (isset($_POST['cancle'])) {
    $ord_id = $_POST['ord_id'];
    $Reg_id = $_POST['Reg_id'];
    $img = $_POST['img'];
    $item_name = $_POST['item_name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $totalprice = $_POST['totalprice'];
    $statu = $_POST['statu'];

    include 'sqlconnect.php';
    $sql = "UPDATE foodorder set statu='C' where ord_id ='$ord_id'";
    if ($con->query($sql) == true) {
        echo " Your food order has cancled!";
    } else {
        echo $con->error;
    }
}

?>