
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Customer.css">
   
    <title>Customer Details</title>
</head>
<body>
    <?php
    require 'config.php';
    $id = $_GET['customerNIC'];
    $sql = "select * from `customer` where customerNIC='$id'";
    
    $result = mysqli_query($conn,$sql);
    
        if ($result) {
        
            while ($row = mysqli_fetch_assoc($result)) {
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $nic = $row['customerNIC'];
                $username = $row['userName'];
                $password = $row['password'];
                $email = $row['email'];
                $dob = $row['dob'];
                $address = $row['address'];
    
                echo '
                
                <div class="container">
                <div class="title">Customer Details</div>
               
                <form>
                  <div class="user-details">
                      <div class="input-box">
                          <span class="details">First Name</span>
                          <input type="text" value="'.$fname.'" 
                      </div>
                      <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" value="'.$lname.'"  >
                    </div>
                    <div class="input-box">
                        <span class="details">Customer NIC</span>
                        <input type="text" value="'.$nic.'" >
                    </div>
                    <div class="input-box">
                        <span class="details">UserName</span>
                        <input type="text" value="'.$username.'" >
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" value="'.$password.'" >
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" value="'.$email.'" >
                    </div>
                    <div class="input-box">
                        <span class="details">Date Of Birth</span>
                        <input type="text" value="'.$dob.'" >
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" value="'.$address.'" >
                    </div>
                   
                   
                  </div>
                  <div class="button">
                    <input type="submit" name="submit" value="Register">
                    
                </div>
                </form>
            </div>
                
                
                ';
            }
        }

    
    
    ?>
   
</body>
<?php


?>
</html>