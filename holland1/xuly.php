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
mysqli_query($conn,"INSERT INTO holland(idkhach, bo1, bo2, bo3, bo4, bo5, bo6, homnay) VALUES('$idkhach', '$bo1','$bo2','$bo3','$bo4','$bo5','$bo6',(now()))");
mysqli_query($conn,"INSERT INTO str(idkhach, bo1, bo2, bo3, bo4, bo5, bo6, homnay,loai) VALUES('$idkhach', '$bo1','$bo2','$bo3','$bo4','$bo5','$bo6',(now()),'holland')");

?>