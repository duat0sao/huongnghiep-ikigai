<?php

include '../config.php';

$data = $_POST['clm'];


 $bo1 = $data[0];
 $bo2 = $data[1];
 $bo3 = $data[2];
 $bo4 = $data[3];
 $bo5 = $data[4];
 $bo6 = $data[5];
 $idkhach = $data[6];


 $sql = "UPDATE holland SET bo1='$bo1', bo2='$bo2', bo3='$bo3', bo4='$bo4', bo5='$bo5', bo6='$bo6' WHERE idkhach='$idkhach'";

mysqli_query($conn, $sql)


?>