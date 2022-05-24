<?php
require 'config.php';
session_start();
if(!isset($_SESSION['successlogin']) || $_SESSION['successlogin'] != "yes"){
    header("Location: ../php/login.php");
}
if(isset($_POST['submit'])){
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$nic = $_POST['nic'];
$userName = $_POST['uName'];
$password = $_POST['uPassword'];
$email = $_POST['uEmail'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender'];

    


$sql = "INSERT INTO `customer`(customerNIC,firstName,lastName,userName,password,email,dob,address,gender)
VALUES ('$nic','$firstName','$lastName','$userName','$password','$email','$dob','$address','$gender')";
$result = mysqli_query($conn,$sql);
if($result){
    $_SESSION['nic'] = $nic;
    header("Location: VehicleRegistration.php?customerID='.$nic.'?name='.$firstName.'");
    
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
    <link rel="stylesheet" href="../css/Customer.css">

    <title>Customer Register</title>
</head>
<body>
    <div class="container">
        <div class="title">Customer Registration</div>
       
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="user-details">
              <div class="input-box">
                  <span class="details">First Name</span>
                  <input type="text" name="fname" placeholder="Enter First Name" required>
              </div>
              <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="lname" placeholder="Enter Last Name" required>
            </div>
            <div class="input-box">
                <span class="details">Customer NIC</span>
                <input type="text" name="nic" placeholder="Enter Your NIC" required>
            </div>
            <div class="input-box">
                <span class="details">UserName</span>
                <input type="text" name="uName" placeholder="Enter Username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="text" name="uPassword" placeholder="Enter Password" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="uEmail" placeholder="Enter Email" required>
            </div>
            <div class="input-box">
                <span class="details">Date Of Birth</span>
                <input type="text" name="dob" placeholder="Enter Your Birthday" required>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" placeholder="Enter Your Address" required>
            </div>
           <div class="gender-details">
               <input type="radio" name="gender" id="dot-1">
               <input type="radio" name="gender" id="dot-2">
               <span class="gender-title">Gender</span>
               <div class="category">
                   <label for="dot-1">
                       <span class="dot one"></span>
                       <span class="gender">Male</span>
                   </label>
                   <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
               </div>
           </div>
           
          </div>
          <div class="button">
            <input type="submit" name="submit" value="Register">
            
        </div>
        </form>
    </div>
</body>
<?php


?>
</html>