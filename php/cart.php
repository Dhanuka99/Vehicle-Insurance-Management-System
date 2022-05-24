<?php

    require 'config.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cart.css">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
  <h1>Our New Insurance Policies</h1>
  </div>
  
<?php
$sql = "select * from `policy`";
$result = mysqli_query($conn,$sql);

if ($result) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['policyID'];
        $name = $row['PolicyName'];
      $desc = $row['policyDesc'];
        $img = $row['imgDir'];
      
        echo '<div class="card" style="width: 18rem;">
        
        <img src="../img/'.$img.'" class="card-img-top" alt="...">
        
        <div class="card-body">
        
        <h5 class="card-title">'.$name.'</h5>
        
        <p class="card-text">'.$desc.'</p>
        
        <a href="#" class="btn btn-primary">View More</a>
      </div>
    </div>';
    }
}

   
?>
</body>
</html>

