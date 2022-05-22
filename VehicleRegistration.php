<?php
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
            </div>
            


          
           
          </div>
          <div class="button">
            <input name="vehicle" type="submit" value="Register">
        </div>
        </form>
      
    </div>
    
</body>

<?php


?>
</html>