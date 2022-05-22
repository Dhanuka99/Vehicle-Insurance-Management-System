<?php
<<<<<<< HEAD
require 'config.php';
session_start();
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
//require 'Header.php';
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
require 'config.php';

>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
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

<<<<<<< HEAD

$sql = "INSERT INTO `customer`(customerNIC,firstName,lastName,userName,password,email,dob,address,gender)
VALUES ('$nic','$firstName','$lastName','$userName','$password','$email','$dob','$address','$gender')";
$result = mysqli_query($conn,$sql);
if($result){
    $_SESSION['nic'] = $nic;
    header("Location: VehicleRegistration.php?customerID='.$nic.'");
    
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
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b

$sql = "INSERT INTO customer(customerNIC,customerFirstName,customerLastName,customerAddress,customerMail,customerGender,customerDOB,customerUserName,customerPassword)
VALUES ('$nic','$firstName','$lastName','$address','$email','$gender','$dob','$userName','$password')";
$result = mysqli_query($conn,$sql);
if($result){
     echo "New recorded addded";
    
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
$sql = "INSERT INTO customer VALUES ('$nic','$firstName','$lastName','$address','$email','$gender','$dob','$userName','$password')";
$result = mysqli_query($conn,$sql);
if($result){
     alert("New recorded addded");
    
    header('location: '.BASEURL."?user_reg=success");
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
}
else {
    echo "Error inserting records:".$conn->error;
}

}
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
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
<<<<<<< HEAD
    <link rel="stylesheet" href="css/Customer.css">
=======
    <link rel="stylesheet" href="css/style.css">
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505

    <title>Customer Register</title>
</head>
<body>
    <div class="container">
        <div class="title">Customer Registration</div>
       
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
        <form action="php/customerRegister.php" method="post">
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
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
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
            
=======
<<<<<<< HEAD
            <input type="submit"  value="Register">
            
=======
            <input type="button" value="Register">
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
        </div>
        </form>
    </div>
</body>
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
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
</html>