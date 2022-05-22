<?php
//Linking the configuration file
session_start();
require 'config.php';
if (isset($_POST['insurance'])) {
    $type = $_POST['type'];
    $ApplyDate = $_POST['adate'];
    $duration = $_POST['duration'];
    //  $status = $_POST['status'];
    $status ="pending";
    $vehicleNo = $_SESSION['vehicleNo'];
    $nic = $_SESSION['nic'];


    $sql = "INSERT INTO `insurance`(insuranceType,insuranceApplyDate,insuranceDuration,insuranceStatus,vehicleNo,customerNIC)
    VALUES ('$type','$ApplyDate','$duration','$status','$vehicleNo','$nic')";
    $result = mysqli_query($conn,$sql);
    if($result){
    $_SESSION['nic'] = $nic;
    $_SESSION['vehicleNo'] = $vehicleNo;
    
    header("Location: index.html?customerID='.$nic.'?vehicleNo='.$vehicleNo.'");
    
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
    <link rel="stylesheet" href="../css/Insurance.css">
    <title>Insurance Form</title>
</head>
<body>
    

    <div class="container">
        <div class="title">Insurance Request Form</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="user-details">
              <div class="input-box">
                  <span class="details">Insurance Type</span>
                  <input type="text" name="type" placeholder="Enter Insurance Type" required>
              </div>
              <div class="input-box">
                <span class="details">Apply Date</span>
                <input type="text" name="adate" placeholder="Enter Apply Date" required>
            </div>
              <div class="input-box">
                <span class="details">Duration</span>
                <input type="text" name="duration" placeholder="Enter Duration" required>
            </div>
           
           
            <div class="input-box">
                <span class="details">Status</span>
                <input type="text" name="status" value = "pending" placeholder="Enter Vehicle Class" disabled>
            </div>
           
            <div class="input-box">
                <span class="details">Vehicle No</span>
                <input type="text" name="vehicleNo" value="<?php echo $_SESSION['vehicleNo'];?>" placeholder="Enter Vehicle No" disabled>
            </div>
            <div class="input-box">
                <span class="details">Customer NIC</span>
                <input type="text" name="nic" value="<?php echo $_SESSION['nic'];?>" placeholder="Enter Vehicle Color" disabled >
            </div>
            


          
           
          </div>
          <div class="button">
            <input name="insurance" type="submit" value="Register">
        </div>
        </form>
    </div>
</body>
</html>