<?php
$email_id = $_POST['email_id'];
$pass = $_POST['pass'];
include "./sqlconnect.php";

$sql = "SELECT * FROM  register WHERE email_id='$email_id' AND pass='$pass'";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    //echo "<script>window.location.href='Index.html'</script>";
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['uid'] = $row['Reg_id'];
    header("Location:home.html");
} else {
    echo "login failed!";
}
$con->close();
?>

<!-- session_start();
$uid = $_SESSION['uid']; -->