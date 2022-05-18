<?php
//Linking the configuration file
//require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Insurance Form</title>
</head>
<body>
    <div class="container">
        <div class="title">Insurance Request Form</div>
        <form action="#">
          <div class="user-details">
              <div class="input-box">
                  <span class="details">Insurance Type</span>
                  <input type="text" placeholder="Enter Vehicle No" required>
              </div>
              <div class="input-box">
                <span class="details">Apply Date</span>
                <input type="text" placeholder="Enter Customer ID" required>
            </div>
              <div class="input-box">
                <span class="details">Duration</span>
                <input type="text" placeholder="Enter Vehicle Model" required>
            </div>
            <div class="input-box">
                <span class="details">Expire Date</span>
                <input type="text" placeholder="Enter Chassi No" required>
            </div>
            <div class="input-box">
                <span class="details">Payment</span>
                <input type="text" placeholder="Enter Fuel Type" required>
            </div>
            <div class="input-box">
                <span class="details">Status</span>
                <input type="text" placeholder="Enter Vehicle Class" required>
            </div>
            <div class="input-box">
                <span class="details"> Policy ID</span>
                <input type="text" placeholder="Enter Vehicle Color" required>
            </div>
            <div class="input-box">
                <span class="details">Vehicle No</span>
                <input type="text" placeholder="Enter Vehicle Color" required>
            </div>
            <div class="input-box">
                <span class="details">Customer ID</span>
                <input type="text" placeholder="Enter Vehicle Color" required>
            </div>
            


          
           
          </div>
          <div class="button">
            <input type="button" value="Register">
        </div>
        </form>
    </div>
</body>
</html>