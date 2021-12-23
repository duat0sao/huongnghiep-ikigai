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
            <p class="tieusu"style="color:{{($data_theme->ChuTS)}} ;"><a href="thichgi.php?id=<?php echo $idkhach;?>">Điều tôi thích</a></p>
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
          <h2>Lịch sử khảo sát</h2>
        </div>


<?php 
$query=mysqli_query($conn,"select * from str where idkhach='$idkhach' ORDER BY idstr DESC");

while($row=mysqli_fetch_array($query)){
  $bo1 = $row['bo1'];
  $bo2 = $row['bo2'];
  $bo3 = $row['bo3'];
  $bo4 = $row['bo4'];
  $bo5 = $row['bo5'];
  $bo6 = $row['bo6'];
  $nhom1 = $row['nhom1'];
  $nhom2 = $row['nhom2'];
  $nhom3 = $row['nhom3'];
  $nhom4 = $row['nhom4'];
  

  $listnhom = array($nhom1,$nhom2,$nhom3,$nhom4);
  $maxnhom = max($listnhom);
  

  $listbo = array($bo1,$bo2,$bo3,$bo4,$bo5,$bo6);
  $maxbo = max($listbo);


  if (empty($maxnhom)){
    $chartConfig = "{type:'bar',data:{labels:['R','I','A','S','E','C'],datasets:[{data:['$bo1','$bo2','$bo3','$bo4','$bo5','$bo6'],backgroundColor:['red','green','blue','orange','purple','yellow']}]}}";
  } else {
    $chartConfig = "{type:'bar',data:{labels:['D','I','S','C'],datasets:[{data:['$nhom1','$nhom2','$nhom3','$nhom4'],backgroundColor:['red','green','blue','oragen']}]}}";
  }

  $chartUrl = 'https://quickchart.io/chart?c=' . $chartConfig;

?>

          <div div class="baiviet_infor" >
            <div class="">  
                <center><strong><?php echo $row['homnay'];?></strong></center>
                <div class="">
                 <center><img class="bd" src=<?php echo $chartUrl;?> alt="2"></center>
                </div>
<?php

if (empty($maxnhom)){
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
}  else{
  switch ($maxnhom) {
    case $nhom1:
      echo "<h1> Người Thủ lĩnh</h1> 
      <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.";
      break;
    case $nhom2:
      echo  "<h1>Người tạo ảnh hưởng </h1>
      <b>Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.";
      break;
    case $nhom3:
      echo "<h1> Người Thủ lĩnh</h1> 
                  <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.";
      break;
    case $nhom4:
      echo " <h1>Người Tuân thủ</h1> 
      <b>Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.";
      break;
    default:
      echo "error";
      break;
  }


}


?>
                    <center><button class="btn"><a style="font-size:20px" href="sendsend.php?id=<?php echo $idkhach;?>&idstr=<?php echo $row['idstr']?>">Gửi</a></button></center>
            </div>
          </div>




<?php }?>      


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



  
  
  
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>