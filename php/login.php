<?php

//require 'Header.php';
//Linking the configuration file

require 'config.php';
session_start();
if(isset($_POST['login'])){

   $name = $_POST['Name'];
   $nic = $_POST['UserNIC'];
   $password = $_POST['Pass'];

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
      header("Location: login.php?error=Username is required");
      exit();
   }else if(empty($password)){
      header("Location: login.php?error=Password is required");
      exit();
   }else if(empty($nic)){
      header("Location: login.php?error=NIC is required");
      exit();
   }else{
   
   $sql = "SELECT * from `signup` WHERE customerNIC = '$nic' AND password = '$password'";
   
   $result = mysqli_query($conn,$sql);
  
   if (mysqli_num_rows($result)===1) {
      # code...
      $row = mysqli_fetch_assoc($result);
      print_r($row);
      if ($row['customerNIC']===$nic && $row['password'] === $password) {
         header("Location: welcome.php");
         $_SESSION['username'] = $row['userName'];
         $_SESSION['nic'] = $row['customerNIC'];
         $_SESSION['type'] = $row['role'];
         header("Location: welcome.php");
         exit();
      }else{
        // header("Location: login.php?error= Incorrect username or password");
        // exit();
        echo "error";
      }
   }

   }

}
/*
userName
if(isset($_POST['login'])){
  $name = $_POST['Name'];
  $nic = $_POST['UserNIC'];
  $password = $_POST['Pass'];

  
   $sql = "select * from signup where username = '$name' and nic = '$nic' and password = '$password'";
   
   $result = mysqli_query($conn,$sql);

   if (mysqli_num_rows($result) > 0) {
      # code...
      $row = mysqli_fetch_assoc($result);
      if ($row['username']== $name && $row['nic']==$nic && $row['pass'] == $password) {
         header("Location: welcome.php");
      }else{
         header("Location: index.html?error= Incorrect username or password");
      }
         # code...
         $user = $row["username"];
         $nic = $row["nic"];
         $pass = $row["password"];
         $type = $row['type'];
         
         session_start();
         $_SESSION['Name'] = $user;
         $_SESSION['UserNIC'] = $nic;
         $_SESSION['Pass'] = $pass;
         $_SESSION['type'] =  $type;
      
      
   }else{
      echo "invalid username password";
   }
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<div class="wave">
   <img src="../img/phone2.svg" alt="">
</div>

<div class="wrapper">
<?php
         if (isset($_GET['error'])) { ?>
         <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
            </div>
         <?php } ?>
         <div class="title">
            Login
         </div>
        
         
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

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
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input name="login" type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
  
</body>
</html>
