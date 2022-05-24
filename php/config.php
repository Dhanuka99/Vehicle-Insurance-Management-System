<?php
    // The connection object
    $conn = mysqli_connect("localhost","danuka","1234","insurance");
    if($conn){
        //echo "Connection Successfull";
        
    }else{
        echo 'Connection error : '.mysqli_connect_error($conn);
    }
?>