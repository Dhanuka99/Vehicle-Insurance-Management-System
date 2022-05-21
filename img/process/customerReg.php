<?php
require 'config.php';

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

$sql = "INSERT INTO customer VALUES ('$nic','$firstName','$lastName','$address','$email','$gender','$dob','$userName','$password')";
$result = mysqli_query($conn,$sql);
if($result){
     alert("New recorded addded");
    
    header('location: '.BASEURL."?user_reg=success");
}
else {
    echo "Error inserting records:".$conn->error;
}

}
?>