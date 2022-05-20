<?php
//require 'Header.php';
//require 'Header.php';
require 'config.php';

    $sql = 'SELECT customerID FROM Customer';

    $result = mysqli_query($conn,$sql);
    $customerID = fetch_field_direct($result,MYSQLI_ASSOC);
    //fetch the resulting rows as an array
    
    echo $customerID;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Vehicle.css">
    <title>Vehicle Register</title>
</head>
<body>
<div class="container">
        <div class="title">Vehicle Registration</div>
        <form action="#">
          <div class="user-details">
              <div class="input-box">
                  <span class="details">Vehicle No</span>
                  <input type="text" placeholder="Enter Vehicle No" required>
              </div>
              <div class="input-box">
                <span class="details">Customer ID</span>
                <input type="text" placeholder="Enter Customer ID" required>
            </div>
              <div class="input-box">
                <span class="details"> Model</span>
                <input type="text" placeholder="Enter Vehicle Model" required>
            </div>
            <div class="input-box">
                <span class="details"> Chassi No</span>
                <input type="text" placeholder="Enter Chassi No" required>
            </div>
            <div class="input-box">
                <span class="details"> Fuel Type</span>
                <input type="text" placeholder="Enter Fuel Type" required>
            </div>
            <div class="input-box">
                <span class="details"> Class</span>
                <input type="text" placeholder="Enter Vehicle Class" required>
            </div>
            <div class="input-box">
                <span class="details"> Color</span>
                <input type="text" placeholder="Enter Vehicle Color" required>
            </div>
            


          
           
          </div>
          <div class="button">
            <input type="button" value="Register">
        </div>
        </form>
      
    </div>
    
</body>

<?php


?>
</html>