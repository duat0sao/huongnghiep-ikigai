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
  <title>Trang cá nhân</title>
  <style>
    @media screen and (max-width: 600px) {
      .bd{
        width: 200px;
        height:200px;
      }
    }
    @media screen and (min-width: 600px) {
      .bd{
        width: 350px;
        height:350px;
      }
    }


  </style>
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
            <p style="font-size:15px"><strong><a href="lichsu.php?id=<?php echo $idkhach;?>">Lịch sử khảo sát</a></strong></p>
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
          <h2>Kết quả</h2>
        </div>


<?php 

$query=mysqli_query($conn,"select * from holland where idholland=(select MAX(idholland) from holland where idkhach='$idkhach')");
$query18=mysqli_query($conn,"select * from disc where iddisc=(select MAX(iddisc) from disc where idkhach='$idkhach')");
$row=mysqli_fetch_array($query);
$row18=mysqli_fetch_array($query18);
$querystr=mysqli_query($conn,"select * from str");
$rowif=mysqli_fetch_array($querystr);
if(isset($rowif)){
  if(isset($row)){
  $bo1 = $row['bo1'];
  $bo2 = $row['bo2'];
  $bo3 = $row['bo3'];
  $bo4 = $row['bo4'];
  $bo5 = $row['bo5'];
  $bo6 = $row['bo6'];
  $timeho = $row['homnay'];
  $queryho=mysqli_query($conn,"select * from str where homnay='$timeho' and idkhach='$idkhach' ");
  $rowho=mysqli_fetch_array($queryho);
  $idho = $rowho['idstr'];
  $listbo = array($bo1,$bo2,$bo3,$bo4,$bo5,$bo6);
  $maxbo = max($listbo);
  switch ($maxbo) {
    case $bo1:
        $a = 'r';
        break;
    case $bo2:
        $a = 'i';
        break;
    case $bo3:
        $a = 'a';
        break;
    case $bo4:
        $a = 's';
        break;
    case $bo5:
        $a = 'e';
        break;
    case $bo6:
        $a = 'c';
        break;
    default:
      echo "error";
      break;
    }
  $chartConfigHo = "{type:'bar',data:{labels:['R','I','A','S','E','C'],datasets:[{data:['$bo1','$bo2','$bo3','$bo4','$bo5','$bo6'],backgroundColor:['red','green','blue','orange','purple','yellow']}]}}";
  $chartUrlHo = 'https://quickchart.io/chart?c=' . $chartConfigHo;
  }
  if(isset($row18)){
  $nhom1 = $row18['nhom1'];
  $nhom2 = $row18['nhom2'];
  $nhom3 = $row18['nhom3'];
  $nhom4 = $row18['nhom4'];
  $timedi = $row18['homnay'];
  $querydi=mysqli_query($conn,"select * from str where homnay='$timedi' and idkhach='$idkhach' ");
  $rowdi=mysqli_fetch_array($querydi);
  $iddi = $rowdi['idstr'];
  $listnhom = array($nhom1,$nhom2,$nhom3,$nhom4);
  $maxnhom = max($listnhom);
  $chartConfigDISC = "{type:'bar',data:{labels:['D','I','S','C'],datasets:[{data:['$nhom1','$nhom2','$nhom3','$nhom4'],backgroundColor:['red','green','blue','oragen']}]}}";
  $chartUrlDISC = 'https://quickchart.io/chart?c=' . $chartConfigDISC;}
  }
  

  
 


  
  

  

  
    
 
  
?>

          <div div class="baiviet_infor" >
            <div class="">  
                <center><strong>Holland</strong></center>
                <div class="">
                 <center><img class="bd" src=<?php if (isset($row)){ echo $chartUrlHo;} 
                 else {echo 'hello';}?> alt="2"></center>
                </div>
                
<?php


  if(isset($row)){
      echo '<h1 id="1">Người thực tế (R)</h1>';
      echo '<p id="11">Người thuộc nhóm sở thích nghề nghiệp này thường có khả năng về kỹ thuật, công nghệ, hệ thống; ưa thích làm việc với đồ vật, máy móc, động thực vật; thích làm các công việc ngoài trời.</p>';
      echo '<p id="111"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm những nghề về kiến trúc, an toàn lao động, nghề mộc, xây dựng, thủy sản, kỹ thuật, máy tàu thủy, lái xe, huấn luyện viên, nông - lâm nghiệp (quản lý trang trại, nhân giống cá, lâm nghiệp...), cơ khí (chế tạo máy, bảo trì và sửa chữa thiết bị, luyện kim, cơ khí ứng dụng, tự động...), điện - điện tử, địa lý - địa chất (đo đạc, vẽ bản đồ địa chính), dầu khí, hải dương học, quản lý công nghiệp...</p>';
     
      echo '<h1 id="2">Người nghiên cứu (I)</h1>';
      echo '<p id="22">Có khả năng về quan sát, khám phá, phân tích đánh giá và giải quyết các vấn đề.</p>';
      echo '<p id="222"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành thuộc lĩnh vực khoa học tự nhiên (toán, lý, hóa, sinh, địa lý, địa chất, thống kê...); khoa học xã hội (nhân học, tâm lý, địa lý...); y - dược (bác sĩ gây mê, hồi sức, bác sĩ phẫu thuật, nha sĩ...); khoa học công nghệ (công nghệ thông tin, môi trường, điện, vật lý kỹ thuật, xây dựng...); nông lâm (nông học, thú y...).</p>';
     
      echo '<h1 id="3">Nghệ sỹ (A)</h1>';
      echo '<p id="33">Có khả năng về nghệ thuật, khả năng về trực giác, khả năng tưởng tượng cao, thích làm việc trong các môi trường mang tính ngẫu hứng, không khuôn mẫu.</p>';
      echo '<p id="333"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành về văn chương; báo chí (bình luận viên, dẫn chương trình...); điện ảnh, sân khấu, mỹ thuật, ca nhạc, múa, kiến trúc, thời trang, hội họa, giáo viên dạy sử/Anh văn, bảo tàng, bảo tồn...</p>';
     
      echo '<h1 id="4">Xã hội (S)</h1>';
      echo '<p id="44">Có khả năng về ngôn ngữ, giảng giải, thích làm những việc như giảng giải, cung cấp thông tin, sự chăm sóc, giúp đỡ, hoặc huấn luyện cho người khác.</p>';
      echo '<p id="444"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: sư phạm; giảng viên; huấn luyện viên điền kinh; tư vấn - hướng nghiệp; công tác xã hội, sức khỏe cộng đồng, thuyền trưởng, thư viện, bác sĩ chuyên khoa, thẩm định giá, nghiên cứu quy hoạch đô thị, kinh tế gia đình, tuyển dụng nhân sự, cảnh sát, xã hội học, bà đỡ, chuyên gia về X-quang, chuyên gia dinh dưỡng..</p>';
     
      echo '<h1 id="5">Thiên phú lãnh đạo (E)</h1>';
      echo '<p id="55">Có khả năng về kinh doanh, mạnh bạo, dám nghĩ dám làm, có thể gây ảnh hưởng, thuyết phục người khác, có khả năng quản lý.</p>';
      echo '<p id="555"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành về quản trị kinh doanh (quản lý khách sạn, quản trị nhân sự...), thương mại, marketing, kế toán – tài chính, luật sư, dịch vụ khách hàng, tiếp viên hàng không, thông dịch viên, pha chế rượu, kỹ sư công nghiệp (ngành kỹ thuật hệ thống công nghiệp), bác sĩ cấp cứu, quy hoạch đô thị, bếp trưởng (nấu ăn), báo chí (phóng viên, biên tập viên...)...</p>';
     
      echo '<h1 id="6">Mẫu người công chức (C)</h1>';
      echo '<p id="66">Có khả năng về số học, thích thực hiện những công việc chi tiết, thích làm việc với những số liệu, theo chỉ dẫn của người khác hoặc các công việc văn phòng.</p>';
      echo '<p id="666"><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành nghề về hành chính, thống kê, thanh tra ngành, người giữ trẻ, điện thoại viên...</p>';
     

    
    switch ($maxbo) {
      case $bo1:
        echo <<<HAP
        <script>
          document.getElementById("1").style.fontWeight = "900";
          document.getElementById("11").style.fontWeight = "900";
          document.getElementById("111").style.fontWeight = "900";
        </script>
    HAP;
          break;
      case $bo2:
        echo <<<HAP
        <script>
          document.getElementById("2").style.fontWeight = "900";
          document.getElementById("22").style.fontWeight = "900";
          document.getElementById("222").style.fontWeight = "900";
        </script>
    HAP;
          break;
      case $bo3:
        echo <<<HAP
        <script>
          document.getElementById("3").style.fontWeight = "900";
          document.getElementById("33").style.fontWeight = "900";
          document.getElementById("333").style.fontWeight = "900";
        </script>
    HAP;
          break;
      case $bo4:
        echo <<<HAP
        <script>
          document.getElementById("4").style.fontWeight = "900";
          document.getElementById("44").style.fontWeight = "900";
          document.getElementById("444").style.fontWeight = "900";
        </script>
    HAP;
          break;
      case $bo5:
        echo <<<HAP
        <script>
          document.getElementById("5").style.fontWeight = "900";
          document.getElementById("55").style.fontWeight = "900";
          document.getElementById("555").style.fontWeight = "900";
        </script>
    HAP;
          break;
      case $bo6:
        echo <<<HAP
        <script>
          document.getElementById("6").style.fontWeight = "900";
          document.getElementById("66").style.fontWeight = "900";
          document.getElementById("666").style.fontWeight = "900";
        </script>
    HAP;
          break;
      default:
        echo "error";
        break;
      }
    echo '<center><button class="btn"><a style="font-size:17px" href="sendsend.php?id='.$idkhach.'&idstr='.$idho.'">Gửi thông tin về mail</a></button></center>';
    
    }else{
      echo '<center>Bạn chưa làm bài khảo sát Holland nào</center>';
    }
    
?>



                    
            </div>
          </div>


          <div div class="baiviet_infor" >
            <div class="">  
                <center><strong>DISC</strong></center>
                <div class="">
                 <center><img class="bd" src=<?php if(isset($row18)){ echo $chartUrlDISC;}
                 else {echo 'khong co gi ca';}?> alt="2"></center>
                </div>
                <?php

if(isset($row)){
  
    echo '<h1 id="d1"> Người Thủ lĩnh (D)</h1><p id="d11"><b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.</p>';
   
    echo  '<h1 id="d2">Người tạo ảnh hưởng (I)</h1><p id="d22"><b>Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.</p>';
   
    echo '<h1 id="d3"> Người Thủ lĩnh (S)</h1><p id="d33"><b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.</p>';
   
    echo '<h1 id="d4">Người Tuân thủ (C)</h1><p id="d44"><b>Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.</p>';
    

    switch ($maxnhom) {
      case $nhom1:
        echo <<<HAP
        <script>
          document.getElementById("d1").style.fontWeight = "900";
          document.getElementById("d11").style.fontWeight = "900";
        
        </script>
    HAP;
          break;
      case $nhom2:
        echo <<<HAP
        <script>
          document.getElementById("d2").style.fontWeight = "900";
          document.getElementById("d22").style.fontWeight = "900";
        
        </script>
    HAP;
          break;
      case $nhom3:
        echo <<<HAP
        <script>
          document.getElementById("d3").style.fontWeight = "900";
          document.getElementById("d33").style.fontWeight = "900";
        
        </script>
    HAP;
          break;
      case $nhom4:
        echo <<<HAP
        <script>
          document.getElementById("d4").style.fontWeight = "900";
          document.getElementById("d44").style.fontWeight = "900";
        
        </script>
    HAP;
          break;
      default:
        echo "error";
        break;
      }
      echo '<center><button class="btn"><a style="font-size:17px" href="sendsend.php?id='.$idkhach.'&idstr='.$iddi.'">Gửi thông tin về mail</a></button></center>';
    }
    else {echo '<center>Bạn chưa làm bài khảo sát DISC nào</center>';}
   

?>
                
            </div>
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
$ci  = 0;
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
<?php
              if ($ci != 0)    { echo  '<center><button class="btn"><a style="font-size:17px" href="sendholland.php?id=<?php echo $idkhach;?>">Gửi thông tin về mail</a></button></center>';}
else{ echo 'Bạn chưa trả lời câu hỏi nào cả';}
?>                   
            </div>
          </div>

  








          <div div class="baiviet_infor" >
            <div class="">  
               
                <div class="">

          <table class="table basic">
                        <thead>
                          <tr>
                            <th>Nhóm ngành</th>
                            <th>Tên ngành</th>
                            <th>Mã ngành</th>
                            
                          </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            if(isset($row)){
                                $query188=mysqli_query($conn,"select * from nhomnganh where holland='$a'");
                                while($row188=mysqli_fetch_array($query188)){
                            ?>
                        <tr>
                            <td>
                                <?php 
                                    $b = $row188['idnhomnganh'];
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
                            <td><?php echo $row188['tennganh']; ?></td>
                            <td><?php echo $row188['manganh']; ?></td>
<td><?php 
$manganhnganh = $row188['manganh'];
$query111=mysqli_query($conn,"select * from gioithieu where manganh='$manganhnganh'");
$row111 =mysqli_fetch_array($query111);

if (isset($row111['gtmot'])){
    echo  '<a href="chitietnganh1.php?id='.$idkhach.'&mg='.$manganhnganh.'">Xem thêm</a>';
}
else {
    echo 'Đang cập nhập';
}

?></td>



                        </tr>

                        <?php  }}?>

                        </tbody>
                    </table>

                    </div>



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