<?php
//$username = null;
$email_id = null;
//$mobile_no = null;
$pass = null;
$dob = null;

//if (isset($_POST['submit'])) {
     //$username = $_POST['username'];
     $email_id = $_POST['email_id'];
    // $mobile_no = $_POST['mobile_no'];
     $pass = $_POST['pass'];
     $dob = $_POST['dob'];
    include 'sqlconnect.php';
    $sql = "UPDATE register set pass='$pass' where email_id='$email_id' and dob='$dob'";
    if ($con->query($sql) == true) {
        echo "Your Password has Reset!";
    } else {
        echo $con->error;
    }
//}
?>


