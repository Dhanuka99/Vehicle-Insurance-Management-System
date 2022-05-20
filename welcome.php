<?php
session_start();
$username = $_SESSION['UserName'];
echo 'welcome page';

?>

<button><?php echo $username;?></button>