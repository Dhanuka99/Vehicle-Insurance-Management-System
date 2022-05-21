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
        <div class="customerCount">
            
        </div>
    <button class="btn btn-primary my-5 "><a class="text-light" href="CustomerRegister.php">Add User</a> </button>
    
    
    <button type="button" class="btn btn-primary">
  Customer Count <span class="badge text-bg-secondary">4</span>
</button>

=======
    <button class="btn btn-primary my-5"><a class="text-light" href="CustomerRegister.php">Add User</a> </button>
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
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
    </tr>
  </thead>
  <tbody>
<?php
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
        <th style="font-weight:500;" scope="row">'.$id.'</th>
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
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
        </td>
      </tr>';
    }
}
?>


  </tbody>
</table>
</table>
</div>
</div>


</body>
</html>
