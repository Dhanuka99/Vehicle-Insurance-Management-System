<?php

    require 'config.php';
<<<<<<< HEAD
  
=======
<<<<<<< HEAD
  
=======
<<<<<<< HEAD
  
=======
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cart.css">
    <title>Document</title>
</head>
<body>
  <div class="navbar">
  <h1>Internship Company</h1>
  </div>
  
<?php
$sql = "select * from `company`";
$result = mysqli_query($conn,$sql);

if ($result) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['companyName'];
        $address = $row['headOfficeAddress'];
        $img = $row['imgDir'];
        echo '<div class="card" style="width: 18rem;">
        <img src="img/'.$img.'" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">'.$name.'</h5>
        <p class="card-text">'.$address.'</p>
        <a href="#" class="btn btn-primary">View More</a>
      </div>
    </div>';
    }
}

   
?>
</body>
<<<<<<< HEAD
</html>

=======
<<<<<<< HEAD
</html>

=======
<<<<<<< HEAD
</html>

=======
</html>
>>>>>>> a84ffb10749d2666400e9d9cdb336653c3f083a2
>>>>>>> a52f219acb9920d906f7778e1b5d8ac04cbe680b
>>>>>>> 3a3e3d51fff21b1cb4a4152545a360d62de3b505
