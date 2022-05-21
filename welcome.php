<?php
session_start();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
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
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
=======
<<<<<<< HEAD
?>
=======
?>
=======
$username = $_SESSION['UserName'];
echo 'welcome page';

?>

<button><?php echo $username;?></button>
>>>>>>> f7254e2c5149d4e6ae732a4a613ebc75e246ab26
>>>>>>> b5a6dc78b143e66968a06fa8c79e3e57df0637fe
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
