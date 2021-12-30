<?php

include '../config.php';








?>








<!doctype html>
<html lang="en">
  <head>
    <title>Ngành nghề phù hợp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      


  <!-- Header 
  #####
  ####
  ###
-->





<br>
<center>
<button class="btn btn-outline-primary"><a href="../index1.php?id=<?php echo $idkhach;?>" class="">Trang chủ</a></button>
</center>
<br>
<div class="container">

<!-- table 1-->
    <div class="container">
    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nhóm ngành</th>
                            <th>Tên ngành</th>
                            <th>Mã ngành</th>
                            
                          </tr>
                        </thead>
                        <tbody class="">
                            <?php
                                $query18=mysqli_query($conn,"select * from nhomnganh");
                                while($row18=mysqli_fetch_array($query18)){
                            ?>
                        <tr>
                            <td>
                                <?php 
                                    $b = $row18['idnhomnganh'];
                                    if ($b == 'edu'){
                                        echo 'Nhóm ngành sư phạm';
                                    } else if ($b == 'art'){
                                        echo 'Nhóm ngành năng khiếu mỹ thuật';
                                    }  else if ($b == 'mu'){
                                        echo 'Nhóm ngành năng khiếu âm nhạc';
                                    } else if ($b == 'bd'){
                                        echo 'Nhóm ngành năng khiếu biểu diễn';
                                    } else if ($b == 'nn'){
                                        echo 'Nhóm ngành ngôn ngữ';
                                    } else if ($b =='kt'){
                                        echo 'Nhóm ngành kinh tế';
                                    } else if ($b =='ctri'){
                                        echo 'Nhóm ngành chính trị';
                                    } else if ($b =='tt'){
                                        echo 'Nhóm ngành truyền thông';
                                    } else if ($b =='qly'){
                                        echo 'Nhóm ngành quản lý - lưu trữ thông tin';
                                    } else if ($b =='luat'){
                                        echo 'Nhóm ngành luật';
                                    } else if ($b =='sinh'){
                                        echo 'Nhóm ngành công nghệ sinh học và ứng dụng';
                                    } else if ($b =='khoa'){
                                        echo 'Nhóm ngành Khoa học môi trường và thiên nhiên';
                                    } else if ($b =='toan'){
                                        echo 'Nhóm ngành Toán học và ứng dụng';
                                    } else if ($b =='cntt'){
                                        echo 'Nhóm ngành công nghệ thông tin';
                                    } else if ($b=='kien'){
                                        echo 'Nhóm ngành xây dựng và kiến trúc';
                                    } else if($b=='yte'){
                                        echo 'Nhóm ngành y tế';
                                    } else if ($b =='dulich'){
                                        echo 'Nhóm ngành vận tải du lịch';
                                    } else if($b=='coan'){
                                        echo 'Nhóm ngành đào tạo công an và quân đội';
                                    } else {
                                        echo 'Nhóm ngành thế dục thể thao';
                                    }
                                
                                
                                ?>
                            </td>
                            <td><?php echo $row18['tennganh']; ?></td>
                            <td><?php echo $row18['manganh']; ?></td>
<td><?php 
$manganhnganh = $row18['manganh'];
$query111=mysqli_query($conn,"select * from gioithieu where manganh='$manganhnganh'");
$row111 =mysqli_fetch_array($query111);

if (isset($row111['gtmot'])){
    echo  '<a href="../chitietnganh.php?id=&mg='.$manganhnganh.'">Xem thêm</a>';
}
else {
    echo 'Đang cập nhập';
}

?></td>



                        </tr>

                        <?php  }?>

                        </tbody>
                    </table>
    </div>








</div>


















                    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
