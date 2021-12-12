<?php
include('config.php');
$id=$_GET['userid'];
$code=$_GET['code'];
$sql1="select * from users where userid='$id'";
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0){
    $user=mysqli_fetch_assoc($result);
}  
if($user['activation_code']==$code){
    $sql="update users set status =1 where userid='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('Location:home.php');
    } 
    else{
        echo "error";
    }

}
?>