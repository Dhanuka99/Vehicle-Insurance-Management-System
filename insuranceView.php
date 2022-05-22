
<?php
 require 'config.php';
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $type = $_POST['type'];
  $adate = $_POST['adate'];
  $duration = $_POST['duration'];
  $exdate = $_POST['exdate'];
  $status = $_POST['status'];
  $pay = $_POST['pay'];
 
  $sql ="UPDATE `insurance` set 
  insuranceType='$type',insuranceApplyDate='$adate',insuranceDuration='$duration',insuranceExpireDate='$exdate',insuranceStatus='$status',insurancePayment='$pay' where insuranceID  ='$id'";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: admin.php");
    echo 'updated';
  }else{
    header("Location: admin.php?error=no_update");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/customerView.css">
    <title>Document</title>
</head>
<body>

<div class="center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<?php
 require 'config.php';

   
    $id = $_GET['insuranceID'];
    $sql = "select * from `insurance` where insuranceID ='$id'";
    
    $result = mysqli_query($conn,$sql);
    
        if ($result) {
        
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['insuranceID'];
                $type = $row['insuranceType'];
                $applyDate = $row['insuranceApplyDate'];
                $duration = $row['insuranceDuration'];
                $exdate = $row['insuranceExpireDate'];
                $pay = $row['insurancePayment'];
                $status = $row['insuranceStatus'];
               
                
                
               
                echo '
                  <div class="inputbox">
                    <input type="text" name="id" value="'.$id.'" required="required">
                    <span>#Insurance ID</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="type" value="'.$type.'" required="required">
                    <span>Type</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="adate" value="'.$applyDate.'" required="required">
                    <span>Apply Date</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="duration" value="'.$duration.'" required="required">
                    <span>Duration</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="exdate" value="'.$exdate.'" required="required">
                    <span>Expire Date</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="status" value="'.$status.'" required="required">
                    <span>Status</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="pay" value="'.$pay.'" required="required">
                    <span>Payment</span>
                  </div>

                  <div class="inputbox">
                    <input name="update" type="submit" value="Update">
                   
                  </div>
                </form>
              </div>
                ';
            }
        }

    
    
    ?>

</body>
</html>