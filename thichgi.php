<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://kit.fontawesome.com/4eb98e0bb5.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
  <title>Tôi thích gì</title>
</head>
<body>

  <?php 
  include 'config.php';
  include 'header.php';
  
  $query12=mysqli_query($conn,"select * from khach where idkhach = '$idkhach'");
  $row12=mysqli_fetch_array($query12);
  
  
  
  ?>
  
    <div class="container abc" >
    <div class="row contents">

      <div class="col-md-4 col-sm-12">
          <div class="thongtin" >
            <h2 class="gioithieu">Giới thiệu</h2>
            <p class="tieusu"style="color:{{($data_theme->ChuTS)}} ;"><a href="banthan.php?id=<?php echo $idkhach;?>">Trang cá nhân</a></p>
            <div class="diachi">
              <div class="">Họ và Tên</div>
              <div class="infor_1"><?= $row12['hovaten'] ?></div>
            </div>
            <div class="diachi">
              <div class="">Email:</div>
              <div class="infor_1"><?= $row12['email'] ?></div>
            </div>
            <div class="diachi">
              <div class="">SĐT</div>
              <div class="infor_1"><?= $row12['sdt'] ?></div>
            </div>
            <div class="diachi">
              <a style="font-size: 15px;" class="btn" href="doimatkhau.php?id=<?php echo $idkhach;?>">Thay đổi thông tin</a>
            </div>
          </div>
        
      </div>
      <div class="col-md-8 col-sm-12  ">
        <div class="dangblog"style="background-color: {{($data_theme->MauNoiDung)}};">
          <div class="avata_icon">    
            </div>
            
          
          </div>
        <div class="baiviet" >
          <h2>Tôi thích gì</h2>
        </div>



          <div div class="baiviet_infor" >
            <div class="">  
               
                <div class="">
                 <table class="table basic">
                        <thead>
                        <tr>
                            <th scope="col">Câu hỏi </th>
                            <th scope="col">Câu trả lời</th>
                            
                          </tr>
                            
                          </thead>
<?php
$query2=mysqli_query($conn,"select * from toithichgi where idkhach = '$idkhach'");
$row2=mysqli_fetch_array($query2);
$hello = 1;

if (empty($row2['cau1'])){
  $ci = 1;
}
else if (empty($row2['cau2'])){
  $ci = 2;
}
else if (empty($row2['cau3'])){
  $ci = 3;
}
else if (empty($row2['cau4'])){
  $ci = 4;
}
else if (empty($row2['cau5'])){
  $ci = 5;
}
else if (empty($row2['cau6'])){
  $ci = 6;
}
else if (empty($row2['cau7'])){
  $ci = 7;
}
else if (empty($row2['cau8'])){
  $ci = 8;
}
else if (empty($row2['cau9'])){
  $ci = 9;
}
else if (empty($row2['cau10'])){
  $ci = 10;
}
else if (emtpy($row2['cau11'])){
  $ci = 11;
}
else if (empty($row2['cau12'])){
  $ci = 12;
}
else if (empty($row2['cau13'])){
  $ci = 13;
}
else if (empty($row2['cau14'])){
  $ci = 14;
}
else if (empty($row2['cau15'])){
  $ci = 15;
} else if (empty($row2['cau16'])){
  $ci = 16;
}
else{
  $ci = 17;
}
for($i=1; $i<$ci; $i++){
  
    $query3=mysqli_query($conn,"select * from noidungcauhoi where idcauhoi = '$i'");
    $row3=mysqli_fetch_array($query3);
?>
                          <tbody>
                            <tr>
                              <td><?php echo $row3['noidungcauhoi']; ?></td>
                              <td><?php echo $row2['cau'.$i.'']; ?></td>
                            </tr>
                            
                            
                          </tbody>
                          <?php }?>
                        </table>
                </div>

                    <center><button class="btn"><a style="font-size:20px" href="sendholland.php?id=<?php echo $idkhach;?>">Gửi thông tin về mail</a></button></center>
                    <center><button class="btn"><a style="font-size:20px" href="banthan.php?id=<?php echo $idkhach;?>">Trở lại</a></button></center>
            </div>
          </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



  
  
  
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>