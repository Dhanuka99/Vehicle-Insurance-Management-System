<?php
<<<<<<< HEAD

require 'config.php';

    $id = $_GET['deleteID'];
    $sql = "delete from `insurance` where insuranceID = '$id'";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("Location: admin.php");
    }else{
        header("Location: admin.php?error=not delete customer");
    }
=======
echo "Customer Delete";
>>>>>>> 05ef050cdbbce7dd2a428528191f078689ff65a7
?>