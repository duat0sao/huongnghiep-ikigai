<?php

include '../config.php';


$data = $_POST['clm'];

 $bo1 = $data[0];
 $bo2 = $data[1];
 $bo3 = $data[2];
 $bo4 = $data[3];
 $bo5 = $data[4];
 $bo6 = $data[5];


 $sql = "INSERT INTO holland (bo1, bo2, bo3, bo4, bo5, bo6) VALUES ('$bo1', '$bo2', '$bo3', '$bo4', '$bo5', '$bo6')";

mysqli_query($conn, $sql)






?>