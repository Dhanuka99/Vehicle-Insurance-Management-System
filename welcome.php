<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['type'])) {
    # code...


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WelCome</title>
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
    <h3>I'm <?php echo $_SESSION['type']?> Your System</h3>
</body>
</html>

<?php
}else{
    header("Location: login.php");
    exit();
}
?>