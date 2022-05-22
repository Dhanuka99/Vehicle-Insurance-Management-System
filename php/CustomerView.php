<?php
 require 'config.php';
if(isset($_POST['update'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $nic = $_POST['nic'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
 
  $sql ="UPDATE `customer` set firstName='$fname',lastName='$lname',userName='$username',password='$password',email='$email',dob='$dob',address='$address' where customerNIC ='$nic'";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: admin.php");
    echo 'updated';
  }else{
    header("Location: admin.php?error=no_update");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/customerView.css">
    <title>Document</title>
</head>
<body>

<div class="center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
                  <div class="inputbox">
                    <input type="text" name="fname" value="'.$fname.'" required="required">
                    <span>First Name</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="lname" value="'.$lname.'" required="required">
                    <span>Last Name</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nic" value="'.$nic.'" required="required">
                    <span>Customer NIC</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="username" value="'.$username.'" required="required">
                    <span>User Name</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="password" value="'.$password.'" required="required">
                    <span>Password</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="email" value="'.$email.'" required="required">
                    <span>Date Of Birth</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="dob" value="'.$dob.'" required="required">
                    <span>Address</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="address" value="'.$address.'" required="required">
                    <span>Address</span>
                  </div>

                  <div class="inputbox">
                    <input name="update" type="submit" value="Update">
                   
                  </div>
                </form>
              </div>
                ';
            }
        }

    
    
    ?>

</body>
</html>