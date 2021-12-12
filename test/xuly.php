<?php

include '../config.php';


$nhom1 = $_POST['nhom1'];

$nhom2 = $_POST['nhom2'];

$nhom3 = $_POST['nhom3'];

$nhom4 = $_POST['nhom4'];

$idkhach = $_POST['idkhach'];



$sql = "UPDATE disc SET nhom1='$nhom1', nhom2='$nhom2', nhom3='$nhom3', nhom4='$nhom4' WHERE idkhach='$idkhach'";

mysqli_query($conn, $sql)

?>