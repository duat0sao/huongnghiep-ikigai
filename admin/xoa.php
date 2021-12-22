<?php
include_once('../config.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$idkhach=$_GET['id'];
$sql = "DELETE FROM khach WHERE idkhach='$idkhach'";
if ($conn->query($sql) === TRUE) {
    $sql1 = "DELETE FROM toithichgi WHERE idkhach='$idkhach'";
    $sql2 = "DELETE FROM disc WHERE idkhach='$idkhach'";
    $sql3 = "DELETE FROM holland WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql1);
    mysqli_query($conn,$sql2);
    mysqli_query($conn,$sql3);
    header('location: thanhcong.php');
} else {
echo "Error updating record: " . $conn->error;
}
 
$conn->close();
}
?>
