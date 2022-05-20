<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
//require 'Header.php';
//require 'Header.php';
require 'config.php';

    $sql = 'SELECT customerID FROM Customer';

    $result = mysqli_query($conn,$sql);
    $customerID = fetch_field_direct($result,MYSQLI_ASSOC);
    //fetch the resulting rows as an array
    
    echo $customerID;
<<<<<<< HEAD
=======
=======
//Linking the configuration file
//require 'config.php';
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
    <link rel="stylesheet" href="css/Vehicle.css">
    <title>Vehicle Register</title>
</head>
<body>
<div class="container">
<<<<<<< HEAD
=======
=======
    <link rel="stylesheet" href="css/style.css">
    <title>Vehicle Register</title>
</head>
<body>
    <div class="container">
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
      
    </div>
    
</body>

<?php


?>
<<<<<<< HEAD
=======
=======
    </div>
</body>
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
</html>