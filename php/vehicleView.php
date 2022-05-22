<?php

?>

<?php
 require 'config.php';
if(isset($_POST['update'])){
  $id = $_POST['no'];
  $model = $_POST['model'];
  $chassi = $_POST['chassi'];
  $fuel = $_POST['fuel'];
  $class = $_POST['class'];
  $color = $_POST['color'];
 
  $sql ="UPDATE `vehicle` set 
  vehicleNo='$id',vehicleModel='$model',vehicleChassiNo='$chassi',vehicleFuelType='$fuel',vehicleClass='$class',vehicleColor='$color' where vehicleNo='$id'";
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
    <link rel="stylesheet" href="../css/customerView.css">
    <title>Document</title>
</head>
<body>

<div class="center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<?php
 require 'config.php';

   
    $id = $_GET['vehicleNo'];
    $sql = "select * from `vehicle` where vehicleNo ='$id'";
    
    $result = mysqli_query($conn,$sql);
    
        if ($result) {
        
            while ($row = mysqli_fetch_assoc($result)) {
                $vehicleNo = $row['vehicleNo'];
                $model = $row['vehicleModel'];
                $chassiNO = $row['vehicleChassiNo'];
                $fuel = $row['vehicleFuelType'];
                $class = $row['vehicleClass'];
                $color = $row['vehicleColor'];
              
                echo '
                  <div class="inputbox">
                    <input type="text" name="no" value="'.$vehicleNo.'" required="required">
                    <span>#Vehicle No</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="model" value="'.$model.'" required="required">
                    <span>Model</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="chassi" value="'.$chassiNO.'" required="required">
                    <span>Chassi No</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="fuel" value="'.$fuel.'" required="required">
                    <span>Fuel Type</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="class" value="'.$class.'" required="required">
                    <span>Vehicle Class</span>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="color" value="'.$color.'" required="required">
                    <span>Color</span>
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