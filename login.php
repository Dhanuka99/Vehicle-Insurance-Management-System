<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26

require 'Header.php';
//Linking the configuration file

require 'config.php';
<<<<<<< HEAD
session_start();
=======

>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
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
   
   $sql = "SELECT * from signup WHERE nic = '$nic' AND password = '$password'";
   
   $result = mysqli_query($conn,$sql);
  
   if (mysqli_num_rows($result)===1) {
      # code...
      $row = mysqli_fetch_assoc($result);
      print_r($row);
<<<<<<< HEAD
      if ($row['nic']===$nic && $row['password'] === $password) {
         header("Location: welcome.php");
         $_SESSION['username'] = $row['username'];
         $_SESSION['nic'] = $row['nic'];
         $_SESSION['type'] = $row['type'];
         header("Location: welcome.php");
         exit();
=======
      if ($row['nic']===$nic && $row['password'] == $password) {
         header("Location: welcome.php");
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
      }else{
         header("Location: login.php?error= Incorrect username or password");
         exit();
      }
   }

   }

}
/*
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
<<<<<<< HEAD
=======
=======
require 'Header.php';
//Linking the configuration file
//require 'config.php';
if(isset($_POST['submit'])){

}
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
=======
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
=======
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
    <title>Login</title>
</head>
<body>
<div class="wave">
   <img src="img/phone2.svg" alt="">
</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26

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
<<<<<<< HEAD
               <input type="text" name="Name" autofocus >
=======
               <input type="text" name="Name" >
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
               <label>User Name</label>
            </div>

            <div class="field">
               <input type="text" name="UserNIC" >
               <label>NIC</label>
            </div>

            <div class="field">
               <input type="password" name="Pass" >
               <label>Password</label>
            </div>


<<<<<<< HEAD
=======
=======
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
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
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
<<<<<<< HEAD
               <input name="login" type="submit" value="Login">
=======
<<<<<<< HEAD
               <input name="login" type="submit" value="Login">
=======
               <input type="submit" value="Login">
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
            </div>
            <div class="signup-link">
               Not a member? <a href="#">Signup now</a>
            </div>
         </form>
      </div>
   </body>
    
</body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

<?php
//require 'Footer.php';

?>
=======
>>>>>>> 07a56edcc00170242203cee2147e05a3c5e3bd36
>>>>>>> 79d33cdbadfe8eb7fd9d1c5c5ea97ae378074ae4
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
</html>
