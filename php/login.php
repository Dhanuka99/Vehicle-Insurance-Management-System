<?php

//require 'Header.php';
//Linking the configuration file

require 'config.php';
session_start();
if(isset($_POST['login'])){

   $name = $_POST['Name'];
   $customernic = $_POST['UserNIC'];
   $customerpassword = $_POST['Pass'];

   function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
   $uname = validate($_POST['Name']);
   $password = validate($_POST['Pass']);
   $nic = validate($_POST['UserNIC']);
   
   if(empty($uname)){
      header("Location: login.php");
      exit();
   }else if(empty($password)){
      header("Location: login.php");
      exit();
   }else if(empty($nic)){
      header("Location: login.php");
      exit();
   }else{
   
   $sql = "SELECT * from `customer` WHERE customerNIC  = '$customernic'";
   
   $result = mysqli_query($conn,$sql);
  
   if (mysqli_num_rows($result)===1) {
      # code...
      $row = mysqli_fetch_assoc($result);
     
      echo $row['customerNIC'];
      if ($row['customerNIC']===$nic && $row['password'] === $password) {
         
        setcookie("customerNIC",$customernic,(time()+(86400*30)),"../../");
        header("Location: ../index.html");
         $_SESSION['successlogin'] = "yes";
        
         exit();
      }else{
         header("Location: login.php");
         exit();
        echo "error";
      }
   }

   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="../js/loginValidation.js"></script>

    <title>Login</title>
</head>
<body>
   <script>
   /*   const params = new URLSearchParams(window.location.search)
for (const param of params) {
  alert(param);
}*/

   </script>
<div class="wave">
   <img src="../img/phone2.svg" alt="">
</div>

<div class="wrapper">

         <div class="title">
            Login
         </div>


         <form onsubmit="loginValidation()" name="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

            <div class="field">
               <input type="text" name="Name" autofocus id="name" >
               <label>User Name</label>
            </div>

            <div class="field">
               <input type="text" name="UserNIC" id="nic">
               <label>NIC</label>
            </div>

            <div class="field">
               <input type="password" name="Pass" id="password">
               <label>Password</label>
            </div>


            <div class="content">
               <!-- <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div> -->
               <div class="pass-link">
                  <a href="../php/forgot.php">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input name="login" type="submit" value="Login">
            </div>
            <div class="signup-link" >
               Not a member? <a href="../php/signup.php">Signup now</a>
            </div>
           
         </form>
      </div>
   </body>
  
</body>
</html>
