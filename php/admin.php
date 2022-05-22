<?php

require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Insurance Confirmation</title>
</head>
<body>
<div class="wrapper">
    <div class="navbar">
       <img src="../img/logo.png" alt="" class="logo">
       <ul>
           <li><img src="img/user.png" alt=""></li>
           
       </ul>
    </div>
    <div class="container">
        
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
      $sql = "select count(*) as countID from `insurance`";
      $result = mysqli_query($conn,$sql);
      $rowcount = mysqli_fetch_assoc( $result );
      
      echo ' <button type="button" class="btn btn-primary">
      All Insurance<span class="badge text-bg-secondary">'.$rowcount['countID'].'</span>
      </button>
      ';
      ?>

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
    </tr>
  </thead>
  <tbody>
<?php
$sql = "select * from `insurance`";
$result = mysqli_query($conn,$sql);
if ($result) {
  
    while ($row = mysqli_fetch_assoc($result)) {
      $insuranceID = trim( $row['insuranceID']);
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
        <button class="btn btn-danger"><a class="text-light" href="customerDelete.php?deleteID='.$insuranceID.'">Delete</a></button>
        <button name="delete" class="btn btn-success"><a class="text-light" href="customerView.php?customerNIC='.$customerNIC.'">Customer</a></button>
        
        <button class="btn btn-info"><a class="text-light" href="vehicleView.php?vehicleNo='.$vehicleNo.'">Vehicle</a></button>
        <button name="delete" class="btn btn-warning"><a class="text-light" href="insuranceView.php?insuranceID='.$insuranceID.'">Insurance</a></button>
        </td>
      </tr>';
    }
}
?>

<!-- <td style="font-weight:500;">'.$customerNIC.'</td>
         <td style="font-weight:500;">'.$vehicleNo.'</td> -->
  </tbody>
</table>
</table>
</div>
</div>


</body>
</html>
