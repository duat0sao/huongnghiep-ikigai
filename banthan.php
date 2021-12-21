
<?php include 'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Bản thân</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>
  <body>
      <?php include 'header.php';?>
<br><br><br><br>
<br><br><br>
<center>
<div class="container">
        
          <h3>
          <?php 
$idkhach = $_GET['id'];

$query11=mysqli_query($conn,"select * from khach where idkhach='$idkhach'");
$row11=mysqli_fetch_array($query11);
echo $row11['hovaten'];

?>
</h3> </div>
</center>

        <div class="container">
            <ul class="nav nav-pills mb-3">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-thongtin-tab" data-toggle="pill" href="#pills-thongtin" role="tab" aria-controls="pills-thonting" aria-selected="true">Thông tin bản thân</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">DISC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Holland</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sở thích</a>
                </li>
            </ul>



            <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-thongtin" role="tabpanel" aria-labelledby="pills-thongtin-tab">
            <table class="table table-striped">
                        <thead>
                          <tr>
                          

                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Mail</th>
                            
                          </tr>
                        </thead>
                        <?php
    $query12=mysqli_query($conn,"select * from khach where idkhach = '$idkhach'");


    $row12=mysqli_fetch_array($query12)
    
?>
                        <tbody>
                          <tr>
                          
                            <td><?php echo $row12['hovaten'];?></td>
                            <td><?php echo $row12['sdt'];?></td>
                            <td><?php echo $row12['email'];?></td>
                           
                          </tr>

                        </tbody>
                    </table>
                    <h5><a class="btn" href="doimatkhau.php?id=<?php echo $idkhach;?>">Thay đổi thông tin</a></h5>

                     
                </div>
                
            
            
       


            
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                          

                            <th>Nhóm 1</th>
                            <th>Nhóm 2</th>
                            <th>Nhóm 3</th>
                            <th>Nhóm 4</th>
                          </tr>
                        </thead>
<?php   
$idkhach = $_GET['id'];
$query=mysqli_query($conn,"select * from disc where idkhach='$idkhach'");
$row=mysqli_fetch_array($query)
?>
                        <tbody>
                          <tr>
                          
                            <td><?php echo $nhom1 = $row['nhom1']; ?></td>
                            <td><?php echo $nhom2 = $row['nhom2']; ?></td>
                            <td><?php echo $nhom3 = $row['nhom3']; ?></td>
                            <td><?php echo $nhom4 = $row['nhom4']; ?></td>
                          </tr>

                        </tbody>
                    </table>
                   

                    <div class="container">
<div class="container"><?php 
$listnhom = array($nhom1,$nhom2,$nhom3,$nhom4);
$max = max($listnhom);
switch ($max) {
  case $nhom1:
    echo '<h1> Người Thủ lĩnh</h1> 
    <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.';
    break;
  case $nhom2:
    echo ' <h1>Người tạo ảnh hưởng </h1>
    <b>Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.';
    break;
  case $nhom3:
    echo '<h1> Người Thủ lĩnh</h1> 
                <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.';
    break;
  case $nhom4:
    echo ' <h1>Người Tuân thủ</h1> 
    <b>Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.';
    break;
  default:
    echo "error";
    break;
}
?>
<center><a class="btn" href="sendholland.php?id=<?php echo $idkhach;?>">Gửi về mail</a></center></div>
                    </div>
                </div>


                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Người thực tế</th>
                            <th scope="col">Người thích nghiên cứu</th>
                            <th scope="col">Người có tính nghệ sỹ</th>
                            <th scope="col">Người có tính xã hội</th>
                            <th scope="col">Người dám nghĩ dám làm</th>
                            <th scope="col">Người công chức</th>
                          </tr>
                        </thead>
<?php   

$query1=mysqli_query($conn,"select * from holland where idkhach='$idkhach'");
$row1=mysqli_fetch_array($query1)
?>
                        <tbody>
                          <tr>
                            
                            <td><?php echo $bo1 = $row1['bo1']; ?></td>
                            <td><?php echo $bo2 = $row1['bo2']; ?></td>
                            <td><?php echo $bo3 = $row1['bo3']; ?></td>
                            <td><?php echo $bo4 = $row1['bo4']; ?></td>
                            <td><?php echo $bo5 = $row1['bo5']; ?></td>
                            <td><?php echo $bo6 = $row1['bo6']; ?></td>
                          </tr>

                          
                        </tbody>
                    </table>
<div class="container">
<?php
$listbo = array($bo1,$bo2,$bo3,$bo4,$bo5,$bo6);
$maxbo = max($listbo);
switch ($maxbo) {
case $bo1:
  echo "<h1>Người thực tế</h1>";
  echo "<p>Người thuộc nhóm sở thích nghề nghiệp này thường có khả năng về kỹ thuật, công nghệ, hệ thống; ưa thích làm việc với đồ vật, máy móc, động thực vật; thích làm các công việc ngoài trời.</p>";
  echo "<p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm những nghề về kiến trúc, an toàn lao động, nghề mộc, xây dựng, thủy sản, kỹ thuật, máy tàu thủy, lái xe, huấn luyện viên, nông - lâm nghiệp (quản lý trang trại, nhân giống cá, lâm nghiệp...), cơ khí (chế tạo máy, bảo trì và sửa chữa thiết bị, luyện kim, cơ khí ứng dụng, tự động...), điện - điện tử, địa lý - địa chất (đo đạc, vẽ bản đồ địa chính), dầu khí, hải dương học, quản lý công nghiệp...</p>";
  break;
case $bo2:
  echo "<h1>Người nghiên cứu</h1>";
  echo "<p>Có khả năng về quan sát, khám phá, phân tích đánh giá và giải quyết các vấn đề.</p>";
  echo "<p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành thuộc lĩnh vực khoa học tự nhiên (toán, lý, hóa, sinh, địa lý, địa chất, thống kê...); khoa học xã hội (nhân học, tâm lý, địa lý...); y - dược (bác sĩ gây mê, hồi sức, bác sĩ phẫu thuật, nha sĩ...); khoa học công nghệ (công nghệ thông tin, môi trường, điện, vật lý kỹ thuật, xây dựng...); nông lâm (nông học, thú y...).</p>";
  break;
case $bo3:
  echo "<h1>Nghệ sỹ</h1>";
  echo "<p>Có khả năng về nghệ thuật, khả năng về trực giác, khả năng tưởng tượng cao, thích làm việc trong các môi trường mang tính ngẫu hứng, không khuôn mẫu.</p>";
  echo "<p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về văn chương; báo chí (bình luận viên, dẫn chương trình...); điện ảnh, sân khấu, mỹ thuật, ca nhạc, múa, kiến trúc, thời trang, hội họa, giáo viên dạy sử/Anh văn, bảo tàng, bảo tồn...</p>";
  break;
case $bo4:
  echo "<h1>Xã hội</h1>";
  echo "<p>Có khả năng về ngôn ngữ, giảng giải, thích làm những việc như giảng giải, cung cấp thông tin, sự chăm sóc, giúp đỡ, hoặc huấn luyện cho người khác.</p>";
  echo "<p>Ngành nghề phù hợp với nhóm này bao gồm: sư phạm; giảng viên; huấn luyện viên điền kinh; tư vấn - hướng nghiệp; công tác xã hội, sức khỏe cộng đồng, thuyền trưởng, thư viện, bác sĩ chuyên khoa, thẩm định giá, nghiên cứu quy hoạch đô thị, kinh tế gia đình, tuyển dụng nhân sự, cảnh sát, xã hội học, bà đỡ, chuyên gia về X-quang, chuyên gia dinh dưỡng..</p>";
  break;
case $bo5:
  echo "<h1>Thiên phú lãnh đạo</h1>";
  echo "<p>Có khả năng về kinh doanh, mạnh bạo, dám nghĩ dám làm, có thể gây ảnh hưởng, thuyết phục người khác, có khả năng quản lý.</p>";
  echo "<p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về quản trị kinh doanh (quản lý khách sạn, quản trị nhân sự...), thương mại, marketing, kế toán – tài chính, luật sư, dịch vụ khách hàng, tiếp viên hàng không, thông dịch viên, pha chế rượu, kỹ sư công nghiệp (ngành kỹ thuật hệ thống công nghiệp), bác sĩ cấp cứu, quy hoạch đô thị, bếp trưởng (nấu ăn), báo chí (phóng viên, biên tập viên...)...</p>";
  break;
case $bo6:
  echo "<h1>Mẫu người công chức</h1>";
  echo "<p>Có khả năng về số học, thích thực hiện những công việc chi tiết, thích làm việc với những số liệu, theo chỉ dẫn của người khác hoặc các công việc văn phòng.</p>";
  echo "<p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành nghề về hành chính, thống kê, thanh tra ngành, người giữ trẻ, điện thoại viên...</p>";
  break;
default:
  echo "error";
  break;
}
?>



</div>
<center><a class="btn" href="sendholland.php?id=<?php echo $idkhach;?>">Gửi về mail</a></center>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Câu hỏi </th>
                            <th scope="col">Câu trả lời </th>
                            
                          </tr>
                            
                          </thead>
<?php
$query2=mysqli_query($conn,"select * from toithichgi where idkhach = '$idkhach'");
$row2=mysqli_fetch_array($query2);
$hello = 1;

if ($row2['cau1']==''){
  $ci = 1;
}
else if ($row2['cau2']==''){
  $ci = 2;
}
else if ($row2['cau3']==''){
  $ci = 3;
}
else if ($row2['cau4']==''){
  $ci = 4;
}
else if ($row2['cau5']==''){
  $ci = 5;
}
else if ($row2['cau6']==''){
  $ci = 6;
}
else if ($row2['cau7']==''){
  $ci = 7;
}
else if ($row2['cau8']==''){
  $ci = 8;
}
else if ($row2['cau9']==''){
  $ci = 9;
}
else if ($row2['cau10']==''){
  $ci = 10;
}
else if ($row2['cau11']==''){
  $ci = 11;
}
else if ($row2['cau12']==''){
  $ci = 12;
}
else if ($row2['cau13']==''){
  $ci = 13;
}
else if ($row2['cau14']==''){
  $ci = 14;
}
else if ($row2['cau15']==''){
  $ci = 15;
} else if ($row2['cau16']==''){
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
                        <center><a class="btn" href="sendholland.php?id=<?php echo $idkhach;?>">Gửi về mail</a></center>
                </div>
                
            </div>
            
        </div>
       



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>