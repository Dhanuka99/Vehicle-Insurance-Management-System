<?php
require 'Header.php';
//Linking the configuration file
//require 'config.php';
if(isset($_POST['submit'])){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<div class="wave">
   <img src="img/phone2.svg" alt="">
</div>
<div class="wrapper">
         <div class="title">
            Login
         </div>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="field">
               <input type="text" name="username" required>
               <label>User Name</label>
            </div>
            <div class="field">
               <input type="text" name="nic" required>
               <label>NIC</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
    
</body>

<?php
//require 'Footer.php';

?>
</html>
