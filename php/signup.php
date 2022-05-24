<?php
 require 'config.php';
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $nic = $_POST['nic'];
  $role = $_POST['role'];
  $password = $_POST['password'];
  
  $sql ="INSERT INTO `signup` (userName,customerNIC,password,role )
  VALUES('$username','$nic','$password','$role')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: ../php/login.php?Congratulations! Successfull SignUp.");
    echo '<script>alert("Done");</script>';
    
  }else{
    header("Location: ../signup.php?error=error");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <title>Sign Up</title>
</head>
<body>

<div class="center">
    
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <h1>Sign Up Form</h1>
                <div class="inputbox">
                    <input type="text" name="username"  required="required">
                    <span>User Name</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nic"  required="required">
                    <span>NIC</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="password" required="required">
                    <span>Password</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="role"  required="required">
                    <span>Role</span>
                  </div>
                
                  <div class="inputbox">
                    <input name="signup" type="submit" value="Sign Up">
                   <span>If you New Customer, You must type Role is Customer</span>
                  </div>
                </form>
              </div>
</body>
</html>