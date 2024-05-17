<?php
session_start();
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orderplace</title>
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
                      <li><a href="foodorderlist.php">Food Order</a></li>
                  </ul>
              </li>
              <li><a href="logreg.html">LOGOUT</a></li>
          </ul>
      </nav>
  </div>

    
    
    <!--------------------------------------------------------------------------->
    <div class="contain">
        <center><h1><u><b>Order Place</b></u></h1></center></div>
         <form  action="foodorder.php" method="post"> 
           <div class="input-row"> 

            <div class="input-group">
              <!--<label>Name</label>
              <input type="text" placeholder="name" name="name" required value=">-->
              </div>                     
                
              </div>

              <div class="input-row">
              <div class="input-group">
                      <label>Reg_id</label>
                      <input type="number" placeholder="Reg_id" name="Reg_id" required value="<?= $uid?>">

                  <div class="input-group">
                      <label>Image</label>
                        <img src="burger.jpg">
                        <br>
                      <input type="file" placeholder="img" name="img" required>
                    <center><button type="submit" class="submit-btn">ORDER Now</button></center>
                  </div> 
              </div>  
                <div class="input-group">  
                <label>Item_Name</label>
                <input type="text" placeholder="Item_name" name="item_name" required>

                  <div class="input-group">
                  <label>Quantity</label>
                  <input type="number" placeholder="qty" name="qty" min="1" max="10" required>
                  
                  <div class="input-group">
                    <label>Price</label>
                    <input type="number" placeholder="price" name="price" required>
            
                    <div class="input-group">
                    <label>Total_Price</label>
                    <input type="number" placeholder="totalprice" name="totalprice" required>
                    <!--<center><button type="submit" class="submit-btn">Reserved Now</button></center>-->
                </div>
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
    
    <<div class="outer-footer">
    @Copyright 2022 :- All Right Reserved
    </div>
 </body>   
</html>
