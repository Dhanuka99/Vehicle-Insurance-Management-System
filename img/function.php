<?php

function check_login($conn){
    if(isset($_SESSION['customerNIC'])){ 
        $id = $_SESSION['customerNIC'];
        $sql = "select * from customer where customerNIC = '$id' limit 1";
        $result = mysqli_query($conn,$sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assco($result);
            return $user_data;
        }
    }
    header("Location: login.php");
    die;
}

?>