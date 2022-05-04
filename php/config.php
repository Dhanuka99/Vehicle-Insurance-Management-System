<?php
    $con=new mysqli("local host","dhanuka","1234","vims");
    if ($con->connect_error)
    {
        die("Connection failed: " . $con->connect_error);
    }
?>