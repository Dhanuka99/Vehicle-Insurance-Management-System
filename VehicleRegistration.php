<?php
<<<<<<< HEAD
//require 'Header.php';
//require 'Header.php';
session_start();
require 'config.php';
if (isset($_POST['vehicle'])) {
    $vehicleNo = $_POST['vehicleNo'];
    $nic = $_POST['nic'];
    $model = $_POST['model'];
    $chassiNo = $_POST['chassiNo'];
    $fuelType = $_POST['fuelType'];
    $class = $_POST['vehicleClass'];
    $color = $_POST['vehicleColor'];

    $sql = "INSERT INTO `vehicle`(vehicleNo,vehicleModel,vehicleChassiNo,vehicleFuelType,vehicleClass,vehicleColor,customerNIC)
    VALUES ('$vehicleNo','$model','$chassiNo','$fuelType','$class','$color','$nic')";
    $result = mysqli_query($conn,$sql);
    if($result){
    $_SESSION['nic'] = $nic;
    $_SESSION['vehicleNo'] = $vehicleNo;
    header("Location: Insurance.php?customerID='.$nic.'?vehicleNo='.$vehicleNo.'");
    
}
else {
    echo "Error inserting records:".$conn->error;
}
}
   
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
//Linking the configuration file
//require 'config.php';
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
    <link rel="stylesheet" href="css/Vehicle.css">
    <title>Vehicle Register</title>
</head>
<body>
<div class="container">
<<<<<<< HEAD
        <div class="title">Vehicle Registration</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="user-details">
              <div class="input-box">
                  <span class="details">Vehicle No</span>
                  <input type="text" name="vehicleNo" placeholder="Enter Vehicle No" required>
              </div>
              <div class="input-box">
                <span class="details">Customer NIC</span>
                 <input type="text" name="nic" value="<?php echo $_SESSION['nic'];?>" placeholder="Enter Customer NIC">
                
            </div>
              <div class="input-box">
                <span class="details"> Model</span>
                <input type="text" name="model" placeholder="Enter Vehicle Model" required>
            </div>
            <div class="input-box">
                <span class="details"> Chassi No</span>
                <input type="text" name="chassiNo" placeholder="Enter Chassi No" required>
            </div>
            <div class="input-box">
                <span class="details"> Fuel Type</span>
                <input type="text" name="fuelType" placeholder="Enter Fuel Type" required>
            </div>
            <div class="input-box">
                <span class="details"> Class</span>
                <input type="text" name="vehicleClass" placeholder="Enter Vehicle Class" required>
            </div>
            <div class="input-box">
                <span class="details"> Color</span>
                <input type="text" name="vehicleColor" placeholder="Enter Vehicle Color" required>
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
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
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
            </div>
            


          
           
          </div>
          <div class="button">
<<<<<<< HEAD
            <input name="vehicle" type="submit" value="Register">
        </div>
        </form>
=======
            <input type="button" value="Register">
        </div>
        </form>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
      
    </div>
    
</body>

<?php


?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    </div>
</body>
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
</html>