<?php
include 'config.php';


$idkhach = $_GET['id'];



$query=mysqli_query($conn,"select * from `toithichgi` where idkhach='$idkhach'");
$row=mysqli_fetch_assoc($query);


if ($row['cau1']==''){
    $cauhoi = 1;
}
else if ($row['cau2']==''){
    $cauhoi = 2;
}
else if ($row['cau3']==''){
    $cauhoi = 3;
}
else if ($row['cau4']==''){
    $cauhoi = 4;
}
else if ($row['cau5']==''){
    $cauhoi = 5;
}
else if ($row['cau6']==''){
    $cauhoi = 6;
}
else if ($row['cau7']==''){
    $cauhoi = 7;
}
else if ($row['cau8']==''){
    $cauhoi = 8;
}
else if ($row['cau9']==''){
    $cauhoi = 9;
}
else if ($row['cau10']==''){
    $cauhoi = 10;
}
else if ($row['cau11']==''){
    $cauhoi = 11;
}
else if ($row['cau12']==''){
    $cauhoi = 12;
}
else if ($row['cau13']==''){
    $cauhoi = 13;
}
else if ($row['cau14']==''){
    $cauhoi = 14;
}
else if ($row['cau15']==''){
    $cauhoi = 15;
} else{
    $cauhoi = 16;
}



$query1=mysqli_query($conn,"select * from `noidungcauhoi` where idcauhoi='$cauhoi'");
$row1=mysqli_fetch_assoc($query1);


if (isset($_POST['update_user'])){
  if ($cauhoi == 1){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau1='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
    else if ($cauhoi == 2){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau2='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 3){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau3='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 4){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau4='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 5){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau5='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 6){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau6='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 7){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau7='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 8){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau8='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 9){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau9='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 10){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau10='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 11){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau11='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 12){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau12='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 13){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau13='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 14){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau14='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else if ($cauhoi == 15){
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau15='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }
  else{
    $noidung=$_POST['gia'];
    if ($conn->connect_error) {
    }
    $sql = "UPDATE toithichgi SET cau1='$noidung' WHERE idkhach='$idkhach'";
    mysqli_query($conn,$sql);
    $url = "thanhcong.php?id=" . $idkhach . "";
    header('location:' . $url);
  }



  
  
  }







?>


   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    
    <style>




    h2.header {
        width: 100%;
        color: #e9558b;
        font-size: 50px;
        margin: 60px auto 20px;
        text-align: center;
    }
  
    }
}



    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Bạn thích gì nào?</title>
</head>
<body>

<?php include 'header.php';?>              




    <div>
    	<div>

            <h2 class="header">Bạn thích gì?</h2>

    		<form method="POST" class="form" id="form-1" >
        <center>
        <div class="mb-3">
    		  	
            <label class="form-message"></label>
                <div class="cauhoi">

                <label style="width:100; font-size: 25px;"> <?php echo $row1['noidungcauhoi']; ?></label><br>
                <br><input style="width:100; font-size: 20px;" type="input" class="form-contr" name="gia" value="">
          
                </div>
       
                </div>
			
    		  
                <div class="footer">
                    <div class="footer_l">
                        
                        <button name="update_user" class="btn" style="width:100; font-size: 20px;">Trả lời</button>
                        
                       
                    </div>
                    
                  </div>


                  
              </center>
    		</form>
    	</div>
    </div>

   



    
</body>
</html>