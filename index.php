<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Activity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h2> This </h2>
    <form action="" method="POST" autocomplete="off" style="margin:10px">
        <label for="age">
            <input type="number" name="age" placeholder="age" style="margin-top:10px" required>
            </label>
            <br>
            <label for="distance">
            <input type="number" name="distance" placeholder="Distance"  style="margin-top:10px" required>
            </label>
            <br>
            <button type="submit" name="btn_submit" value="calculate" style="margin-top:10px">Compute</button>
    </form> 


<?php
        include "fare.php"; 

        if(isset($_POST["btn_submit"])){
            $studentName = $_POST["studentName"];
            $yearLevel = $_POST["yearLevel"];
            $totalUnits = $_POST["totalUnits"];
            $chooseLab = $_POST["chooseLab"];

        
            // Instantiate a class / create an object
            $fare_obj = new Fare();
        
            // Call the setValues here
            $fare_obj->setValues($age, $distance);
        
            echo "Age: " . $fare_obj->getAge() . "years old";
            echo "<br>";
            echo "Distance: " . $fare_obj->getDistance() . "km";
            echo "<br>";
            echo "totalFare: ". $fare_obj->calculateFare() ;
        }    
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
