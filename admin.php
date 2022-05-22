<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Insurance Confirmation</title>
</head>
<body>
<div class="wrapper">
    <div class="navbar">
       <img src="img/logo.png" alt="" class="logo">
       <ul>
           <li><img src="img/user.png" alt=""></li>
           
       </ul>
    </div>
    <div class="container">
<<<<<<< HEAD
        
        <button name="add" class="addInsurance"><a href="CustomerRegister.php">Add Insurance</a></button>
       
      <?php
      $sql = "select count(*) as countID from `insurance` where insuranceStatus='pending'";
      $result = mysqli_query($conn,$sql);
      $rowcount = mysqli_fetch_assoc( $result );
      
      echo ' <button type="button" class="btn btn-primary">
      pending Insurance<span class="badge text-bg-secondary">'.$rowcount['countID'].'</span>
      </button>
      ';
      ?>


<?php
      $sql = "select count(*) as countID from `insurance` where insuranceStatus='active'";
      $result = mysqli_query($conn,$sql);
      $rowcount = mysqli_fetch_assoc( $result );
      
      echo ' <button type="button" class="btn btn-primary">
      Active Insurance<span class="badge text-bg-secondary">'.$rowcount['countID'].'</span>
      </button>
      ';
      ?>
<?php
=======
<<<<<<< HEAD
        <div class="customerCount">
            
        </div>
    <!-- <button class="btn btn-primary my-5 "><a class="text-light" href="CustomerRegister.php">Add User</a> </button> -->
    
    
   
      <?php
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
      $sql = "select count(*) as countID from `insurance`";
      $result = mysqli_query($conn,$sql);
      $rowcount = mysqli_fetch_assoc( $result );
      
      echo ' <button type="button" class="btn btn-primary">
<<<<<<< HEAD
      All Insurance<span class="badge text-bg-secondary">'.$rowcount['countID'].'</span>
=======
      Insurance Request <span class="badge text-bg-secondary">'.$rowcount['countID'].'</span>
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
      </button>
      ';
      ?>

<<<<<<< HEAD
=======

>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
    <table class="table caption-top">
  <caption><h2 style="font-weight:700;">New Customer's Requested Insurance</h2></caption>
  <thead>
    <tr>
      <th scope="col">#Insurance ID</th>
      <th scope="col">Type</th>
      <th scope="col">ApplyDate</th>
      <th scope="col">Duration</th>
      <th scope="col">ExpireDate</th>
      <th scope="col">Payment</th>
      <th scope="col">Status</th>
      <!-- <th scope="col">Customer NIC</th>
      <th scope="col">Vehicle No</th> -->
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
        <div class="customerCount">
            
        </div>
    <button class="btn btn-primary my-5 "><a class="text-light" href="CustomerRegister.php">Add User</a> </button>
    
    
    <button type="button" class="btn btn-primary">
  Customer Count <span class="badge text-bg-secondary">4</span>
</button>

<<<<<<< HEAD
=======
=======
    <button class="btn btn-primary my-5"><a class="text-light" href="CustomerRegister.php">Add User</a> </button>
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
    <table class="table caption-top">
  <caption><h2 style="font-weight:700;">Registered Customer List</h2></caption>
  <thead>
    <tr>
      <th scope="col">#Insurance ID</th>
      <th scope="col">Customer NIC</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">User Name</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
    </tr>
  </thead>
  <tbody>
<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
$sql = "select * from `insurance`";
$result = mysqli_query($conn,$sql);
if ($result) {
  
    while ($row = mysqli_fetch_assoc($result)) {
<<<<<<< HEAD
      $insuranceID = trim( $row['insuranceID']);
=======
      $insuranceID = $row['insuranceID'];
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
        $customerNIC = $row['customerNIC'];
        $type = $row['insuranceType'];
        $applyDate = $row['insuranceApplyDate'];
        $duration = $row['insuranceDuration'];
        $status = $row['insuranceStatus'];
        $vehicleNo = $row['vehicleNo'];

        $expireDate = $row['insuranceExpireDate'];
        $payment = $row['insurancePayment'];
     
       
        echo ' <tr>
        <th style="font-weight:500; scope="row">'.$insuranceID.'</th>
        <td style="font-weight:500;" >'.$type.'</td>
        <td style="font-weight:500;">'.$applyDate.'</td>
        <td style="font-weight:500;">'.$duration.'</td>
        <td style="font-weight:500;">'.$expireDate.'</td>
        <td style="font-weight:500;">'.$payment.'</td>
        <td style="font-weight:500;">'.$status.'</td>
       
        <td>
<<<<<<< HEAD
        <button class="btn btn-danger"><a class="text-light" href="customerDelete.php?deleteID='.$insuranceID.'">Delete</a></button>
        <button name="delete" class="btn btn-success"><a class="text-light" href="customerView.php?customerNIC='.$customerNIC.'">Customer</a></button>
        
        <button class="btn btn-info"><a class="text-light" href="vehicleView.php?vehicleNo='.$vehicleNo.'">Vehicle</a></button>
        <button name="delete" class="btn btn-warning"><a class="text-light" href="insuranceView.php?insuranceID='.$insuranceID.'">Insurance</a></button>
=======
        <button class="btn btn-success"><a class="text-light" href="customerUpdate.php">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="customerDelete.php?deleteID = '.$insuranceID.'">Delete</a></button>
        <button class="btn btn-warning"><a class="text-light" href="customerView.php?customerNIC='.$customerNIC.'">View Customer</a></button>
        <button class="btn btn-info"><a class="text-light" href="customerDelete.php?vehicleNo = '.$vehicleNo.'">View Vehicle</a></button>
=======
$sql = "select * from `customer`";
$result = mysqli_query($conn,$sql);
if ($result) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['customerID'];
        $nic = $row['customerNIC'];
        $fname = $row['customerFirstName'];
        $lname = $row['customerLastName'];
        $address = $row['customerAddress'];
        $mail = $row['customerMail'];
        $gender = $row['customerGender'];
        $dob = $row['customerDOB'];
        $uname = $row['customerUserName'];
        $upassword = $row['customerPassword'];

        echo ' <tr>
<<<<<<< HEAD
        <th style="font-weight:500; scope="row">'.$id.'</th>
=======
<<<<<<< HEAD
        <th style="font-weight:500; scope="row">'.$id.'</th>
=======
<<<<<<< HEAD
        <th style="font-weight:500; scope="row">'.$id.'</th>
=======
        <th style="font-weight:500;" scope="row">'.$id.'</th>
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
        <td style="font-weight:500;" >'.$nic.'</td>
        <td style="font-weight:500;">'.$fname.'</td>
        <td style="font-weight:500;">'.$lname.'</td>
        <td style="font-weight:500;">'.$address.'</td>
        <td style="font-weight:500;">'.$mail.'</td>
        <td style="font-weight:500;">'.$gender.'</td>
        <td style="font-weight:500;">'.$dob.'</td>
        <td style="font-weight:500;">'.$uname.'</td>
        <td style="font-weight:500;">'.$upassword.'</td>
        <td>
        <button class="btn btn-success"><a class="text-light" href="customerUpdate.php">Update</a></button>
        <button class="btn btn-danger"><a class="text-light" href="customerDelete.php?deleteID = '.$id.'">Delete</a></button>
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
        </td>
      </tr>';
    }
}
?>

<<<<<<< HEAD
<!-- <td style="font-weight:500;">'.$customerNIC.'</td>
         <td style="font-weight:500;">'.$vehicleNo.'</td> -->
=======
<<<<<<< HEAD
<!-- <td style="font-weight:500;">'.$customerNIC.'</td>
         <td style="font-weight:500;">'.$vehicleNo.'</td> -->
=======

>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
  </tbody>
</table>
</table>
</div>
</div>


</body>
</html>
