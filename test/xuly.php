<?php

include '../config.php';


$nhom1 = $_POST['nhom1'];

$nhom2 = $_POST['nhom2'];

$nhom3 = $_POST['nhom3'];

$nhom4 = $_POST['nhom4'];



 $sql = "INSERT INTO disc (nhom1, nhom2, nhom3, nhom4) VALUES ('$nhom1', '$nhom2', '$nhom3', '$nhom4')";

mysqli_query($conn, $sql)


?>