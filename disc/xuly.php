<?php

include '../config.php';

$data = $_POST['clm'];

$nhom1 = $data[0];

$nhom2 = $data[1];

$nhom3 = $data[2];

$nhom4 = $data[3];

$idkhach = $data[4];
#mysqli_query($conn,"INSERT INTO holland(idkhach, bo1, bo2, bo3, bo4, bo5, bo6) VALUES('$idkhach', '0','0','0','0','0','0')");
mysqli_query($conn,"INSERT INTO disc(idkhach,nhom1,nhom2,nhom3,nhom4,homnay) VALUES('$idkhach','$nhom1','$nhom2','$nhom3','$nhom4','(now())'");

#$sql = "UPDATE disc SET nhom1='$nhom1', nhom2='$nhom2', nhom3='$nhom3', nhom4='$nhom4' WHERE idkhach='$idkhach'";

#mysqli_query($conn, $sql)


?>