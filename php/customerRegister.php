<?php
<<<<<<< HEAD

require('../php/config.php');

    if(isset($_POST['submit'])){
        if(empty($_POST['fname'])){
            echo 'First Name is Reuired!';
        }else{
            $firstName = $_POST['fname'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$firstName)){
                echo 'first name must be latters and space only';
            }
        }
        echo $_POST['fname'];
        echo $_POST['nic'];
        echo $_POST['uName'];
        echo $_POST['uPassword'];
        echo $_POST['uEmail'];
        echo $_POST['dob'];
        echo $_POST['address'];
    }
?>
=======
//Linking the configuration file
require 'config.php';
?>

>>>>>>> dace51fc7db08d272bce58237c475469b42055e3
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="../css/style.css">
=======
    <link rel="stylesheet" href="css/style.css">
>>>>>>> dace51fc7db08d272bce58237c475469b42055e3

    <title>Customer Register</title>
</head>
<body>
    <div class="container">
        <div class="title">Customer Registration</div>
       
<<<<<<< HEAD
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
=======
        <form action="php/customerRegister.php" method="post">
>>>>>>> dace51fc7db08d272bce58237c475469b42055e3
          <div class="user-details">
              <div class="input-box">
                  <span class="details">First Name</span>
                  <input type="text" name="fname" placeholder="Enter First Name" required>
              </div>
              <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="lname" placeholder="Enter Last Name" required>
            </div>
            <div class="input-box">
                <span class="details">Customer NIC</span>
                <input type="text" name="nic" placeholder="Enter Your NIC" required>
            </div>
            <div class="input-box">
                <span class="details">UserName</span>
                <input type="text" name="uName" placeholder="Enter Username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="text" name="uPassword" placeholder="Enter Password" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="uEmail" placeholder="Enter Email" required>
            </div>
            <div class="input-box">
                <span class="details">Date Of Birth</span>
                <input type="text" name="dob" placeholder="Enter Your Birthday" required>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" placeholder="Enter Your Address" required>
            </div>
           <div class="gender-details">
               <input type="radio" name="gender" id="dot-1">
               <input type="radio" name="gender" id="dot-2">
               <span class="gender-title">Gender</span>
               <div class="category">
                   <label for="dot-1">
                       <span class="dot one"></span>
                       <span class="gender">Male</span>
                   </label>
                   <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
               </div>
           </div>
           
          </div>
          <div class="button">
<<<<<<< HEAD
            <input type="submit" name="submit" value="Register">
=======
            <input type="button" value="Register">
>>>>>>> dace51fc7db08d272bce58237c475469b42055e3
        </div>
        </form>
    </div>

<<<<<<< HEAD

</body>
</html>


=======
</body>
</html>

<?php
    
?>
>>>>>>> dace51fc7db08d272bce58237c475469b42055e3

