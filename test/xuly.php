<?php

include '../config.php';

$data = $_POST['datacandi'];

$nhom1 = $data[0];

$nhom2 = $data[1];

$nhom3 = $data[2];

$nhom4 = $data[3];

$idkhach = $data[4];


$sql = "UPDATE disc SET nhom1='$nhom1', nhom2='$nhom2', nhom3='$nhom3', nhom4='$nhom4' WHERE idkhach='$idkhach'";

mysqli_query($conn, $sql)


?>