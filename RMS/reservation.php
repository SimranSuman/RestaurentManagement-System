<?php
session_start();
//$uid = $_SESSION['uid'];
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESERVATION</title>
    <link rel="stylesheet" href="order.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
    <!--------------------------------------------------------------------------->
    <div class="contain">
        <center><h1><u><b>Booking Place</b></u></h1></center></div>
         <form  action="reserveconnect.php" method="post"> 
           <div class="input-row"> 

            <div class="input-group">
              <!--<label>Name</label>
              <input type="text" placeholder="name" name="name" required value="<?= $username?>">-->
              </div>                     
                
              </div>

              <div class="input-row">
              <div class="input-group">
                      <label>Name</label>
                      <input type="text" placeholder="nane" name="name" required value="<?= $username?>">

                  <div class="input-group">
                      <label>Table No</label>
                      <input type="number" placeholder="table Number" name="tableno" required>

                      <div class="input-group">  
                         <label>Time</label>
                        <input type="time" placeholder="time" name="time" required>
                    </div>
                    <center><button type="submit" class="submit-btn">Reserved Now</button></center>
                  </div> 
              </div>

                  
                 
                  
                  <div class="input-group">
                  <label>No of guest</label>
                  <input type="number" placeholder="people" name="people" required>

                  <div class="input-group">
                    <label>Date</label>
                    <input type="date" placeholder="Date" name="date" required>
                    
                    <div class="input-group">
                    <label>Price</label>
                    <input type="number" placeholder="price" name="price" required>
                   
                    <!--<center><button type="submit" class="submit-btn">Reserved Now</button></center>-->
                </div>
                </div>
                
                <!--<button type="submit">SEND</button>-->
                <!--<center><button type="submit" class="submit-btn">Reserved Now</button></center>-->
                <!--<center><button type="reset" class="reset-btn">Cancle</button></center>-->
                <!--<button type="submit" class="cancle-btn">Cancle</button>-->
         </div>
      </div>
      </form>


        
        

    <!---------------------------------footer-use-------------------------->
    
    <div class="outer-footer">
    @Copyright 2022 :- All Right Reserved
    </div>
 </body>   
</html>
