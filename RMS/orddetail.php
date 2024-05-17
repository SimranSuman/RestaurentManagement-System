<?php
session_start();
$username = $_SESSION['username'];
//-----fetching existing order details ------

require_once 'sqlconnect.php';
$sql = "SELECT * FROM reservation WHERE name='$username'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your-Details</title>
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body id="body">
    <!-------------------------------navbar-------------------------------->
    <div class="dropdown">
        <nav>
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="reservation.php">RESERVATION  </a></li>
                <li><a href="menu.html">ORDER </a></li>
                <li><a href="contact.html">CONTACT </a></li>
                <li><a href="#">MY ORDER <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="orddetail.php">Reservation_Detail</a></li>
                        <li><a href="foodorderlist.php">Food_Order</a></li>
                    </ul>
                </li>
                <li><a href="logreg.html">LOGOUT</a></li>
            </ul>
        </nav>
    </div>
    <!--------------------------------index-page--------------------------->
    <div class="contain">
        <center><h1><u><b>Booking Details</b></u></h1></center></div>
        <br>
        <form action="book.php" method="post">
            
            <lable><b>R_ID</b></lable><br>
            <input type="text" name="R_id" id="R_id" value="<?= $row['R_id'] ?>">
            <br>
            <label><b>Name</b></label>
            <input type="text" name="name" id="name" value="<?= $row['name'] ?>">
            <br>
            <label><b>People</b></label>
            <input type="text" name="people" id="people" value="<?= $row['people'] ?>">
            <br>
            <label><b>Table_No</b></label>
            <input type="text" name="tableno" id="tableno" value="<?= $row['tableno'] ?>">
            <br>
            <label><b>Time</b></label>
            <input type="text" name="time" id="time" value="<?= $row['time'] ?>">
            <br>
            <label><b>Date</b></label>
            <input type="text" name="date" id="date" value="<?= $row['date'] ?>">
            <br>
            <label><b>Price</b></label>
            <input type="text" name="price" id="price" value="<?= $row['price'] ?>">
            <br>
            <label><b>Status</b></label>
            <input type="text" name="statu" id="statu" value="<?= $row['statu'] ?>">
             <center><button type="submit" class="submit-btn" name="cancle">Cancle</button></center>
        </form>
    </div>


    <!--------------------------------footer-page--------------------------->
    <div class="outer-footer">
    @Copyright 2022 :- All Right Reserved
    </div>

</body>

</html>