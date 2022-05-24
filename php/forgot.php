<?php


?>

<?php
session_start();
 require 'config.php';
if(isset($_POST['forgot'])){
  $username = $_POST['username'];
  $nic = $_POST['nic'];
  $newPassword = $_POST['newpassword'];
  $confirmPassword = $_POST['confirmpassword'];
  
  $sql ="UPDATE `signup` set password='  $newPassword' where customerNIC='$nic'";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: ../php/login.php?Password Reset Success");
    echo '<script>alert("Done");</script>';
    $_SESSION['username'] = $row['userName'];
    $_SESSION['nic'] = $row['customerNIC'];
    $_SESSION['password'] = $newPassword;
    
  }else{
    header("Location: ../signup.php?error=Password not Reset");
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
    <title>Reset Password</title>
</head>
<body>

<div class="center">
    
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <h1>Forgot Your Password?</h1>
                <div class="inputbox">
                    <input type="text" name="username"  required="required">
                    <span>User Name</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nic"  required="required">
                    <span>NIC</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" id="text1" name="newpassword" required="required">
                    <span>New Password</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" id="text2" name="confirmpassword"  required="required">
                    <span>Confirm Password</span>
                  </div>
                  <script>

                        document.getElementById("text1").addEventListener("keyup", testpassword2);
                        document.getElementById("text2").addEventListener("keyup", testpassword2);

                    function testpassword2() {
                        var text1 = document.getElementById("text1");
                        var text2 = document.getElementById("text2");
                        if (text1.value == text2.value)
                            text2.style.borderColor = "#2EFE2E";
                        else
                        text2.style.borderColor = "red";
                        }

</script>
                
                  <div class="inputbox">
                    <input name="forgot" type="submit" value="Reset Password">
                  
                  </div>
                </form>
              </div>
</body>
</html>