<?php
//Linking the configuration file
<<<<<<< HEAD
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


=======
//require 'config.php';
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
    <link rel="stylesheet" href="css/Insurance.css">
    <title>Insurance Form</title>
</head>
<body>
    

<<<<<<< HEAD
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
    <title>Insurance Form</title>
</head>
<body>
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
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
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
            </div>
            


          
           
          </div>
          <div class="button">
<<<<<<< HEAD
            <input name="insurance" type="submit" value="Register">
=======
            <input type="button" value="Register">
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
        </div>
        </form>
    </div>
</body>
</html>