<?php

include '../config.php';




 $bo1 = $_POST['bo1'];
 $bo2 = $_POST['bo2'];
 $bo3 = $_POST['bo3'];
 $bo4 = $_POST['bo4'];
 $bo5 = $_POST['bo5'];
 $bo6 = $_POST['bo6'];


 $sql = "INSERT INTO holland (bo1, bo2, bo3, bo4, bo5, bo6) VALUES ('$bo1', '$bo2', '$bo3', '$bo4', '$bo5', '$bo6')";

mysqli_query($conn, $sql)






?>