<?php 
include('config.php');
$idkhach = $_GET['id'];
$idstr = $_GET['idstr'];





$query=mysqli_query($conn,"select * from str where idstr='$idstr'");

$row=mysqli_fetch_array($query);
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
  $idkhach = $row['idkhach'];
  $query113=mysqli_query($conn,"select * from khach where idkhach='$idkhach'");
  $row113=mysqli_fetch_array($query113);
  $eail = $row113['email'];
  $hovaten = $row113['hovaten'];
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



if (empty($maxnhom)){
  switch ($maxbo) {
    case $bo1:
      $haha = "<h1>Người thực tế</h1><p>Người thuộc nhóm sở thích nghề nghiệp này thường có khả năng về kỹ thuật, công nghệ, hệ thống; ưa thích làm việc với đồ vật, máy móc, động thực vật; thích làm các công việc ngoài trời.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm những nghề về kiến trúc, an toàn lao động, nghề mộc, xây dựng, thủy sản, kỹ thuật, máy tàu thủy, lái xe, huấn luyện viên, nông - lâm nghiệp (quản lý trang trại, nhân giống cá, lâm nghiệp...), cơ khí (chế tạo máy, bảo trì và sửa chữa thiết bị, luyện kim, cơ khí ứng dụng, tự động...), điện - điện tử, địa lý - địa chất (đo đạc, vẽ bản đồ địa chính), dầu khí, hải dương học, quản lý công nghiệp...</p>";
      break;
    case $bo2:
      echo "<h1>Người nghiên cứu</h1><p>Có khả năng về quan sát, khám phá, phân tích đánh giá và giải quyết các vấn đề.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành thuộc lĩnh vực khoa học tự nhiên (toán, lý, hóa, sinh, địa lý, địa chất, thống kê...); khoa học xã hội (nhân học, tâm lý, địa lý...); y - dược (bác sĩ gây mê, hồi sức, bác sĩ phẫu thuật, nha sĩ...); khoa học công nghệ (công nghệ thông tin, môi trường, điện, vật lý kỹ thuật, xây dựng...); nông lâm (nông học, thú y...).</p>";
      break;
    case $bo3:
      $haha = "<h1>Nghệ sỹ</h1><p>Có khả năng về nghệ thuật, khả năng về trực giác, khả năng tưởng tượng cao, thích làm việc trong các môi trường mang tính ngẫu hứng, không khuôn mẫu.</p><p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về văn chương; báo chí (bình luận viên, dẫn chương trình...); điện ảnh, sân khấu, mỹ thuật, ca nhạc, múa, kiến trúc, thời trang, hội họa, giáo viên dạy sử/Anh văn, bảo tàng, bảo tồn...</p>";
      break;
    case $bo4:
      $haha = "<h1>Xã hội</h1><p>Có khả năng về ngôn ngữ, giảng giải, thích làm những việc như giảng giải, cung cấp thông tin, sự chăm sóc, giúp đỡ, hoặc huấn luyện cho người khác.</p><p>Ngành nghề phù hợp với nhóm này bao gồm: sư phạm; giảng viên; huấn luyện viên điền kinh; tư vấn - hướng nghiệp; công tác xã hội, sức khỏe cộng đồng, thuyền trưởng, thư viện, bác sĩ chuyên khoa, thẩm định giá, nghiên cứu quy hoạch đô thị, kinh tế gia đình, tuyển dụng nhân sự, cảnh sát, xã hội học, bà đỡ, chuyên gia về X-quang, chuyên gia dinh dưỡng..</p>";
      break;
    case $bo5:
      $haha = "<h1>Thiên phú lãnh đạo</h1><p>Có khả năng về kinh doanh, mạnh bạo, dám nghĩ dám làm, có thể gây ảnh hưởng, thuyết phục người khác, có khả năng quản lý.</p><p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành về quản trị kinh doanh (quản lý khách sạn, quản trị nhân sự...), thương mại, marketing, kế toán – tài chính, luật sư, dịch vụ khách hàng, tiếp viên hàng không, thông dịch viên, pha chế rượu, kỹ sư công nghiệp (ngành kỹ thuật hệ thống công nghiệp), bác sĩ cấp cứu, quy hoạch đô thị, bếp trưởng (nấu ăn), báo chí (phóng viên, biên tập viên...)...</p>";
      break;
    case $bo6:
      $haha = "<h1>Mẫu người công chức</h1><p>Có khả năng về số học, thích thực hiện những công việc chi tiết, thích làm việc với những số liệu, theo chỉ dẫn của người khác hoặc các công việc văn phòng.</p><p>Ngành nghề phù hợp với nhóm này bao gồm: Các ngành nghề về hành chính, thống kê, thanh tra ngành, người giữ trẻ, điện thoại viên...</p>";
      break;
    default:
      echo "error";
      break;
    }
}  else{
  switch ($maxnhom) {
    case $nhom1:
      $haha = "<h1> Người Thủ lĩnh</h1> 
      <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.";
      break;
    case $nhom2:
      $haha =  "<h1>Người tạo ảnh hưởng </h1>
      <b>Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.";
      break;
    case $nhom3:
      $haha = "<h1> Người Thủ lĩnh</h1> 
                  <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.";
      break;
    case $nhom4:
      $haha = " <h1>Người Tuân thủ</h1> 
      <b>Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.";
      break;
    default:
      echo "error";
      break;
  }


}

















        require 'mailer/PHPMailerAutoload.php';  
        $mail = new PHPMailer(true);
        //$mail->SMTPDebug = 3;                                   //Nhật ký gỡ lỗi        
        $mail->isSMTP();                                       
        $mail->Host = 'smtp.gmail.com;';                       
        $mail->SMTPAuth = true;                               
        $mail->Username = '18lynnxx@gmail.com';                  //tk gmail
        $mail->Password = 'ypwxmziagzpzvmoa';                           //mk gmail
        $mail->SMTPSecure = 'tls';                              
        $mail->Port = 587;                                       
        $mail->setFrom('18lynnxx@gmail.com', 'BOSS lv1');  
        $mail->addAddress($eail);                              
        $mail->isHTML(true);   
        $mail->CharSet = "UTF-8";                                 
        $mail->Subject = 'Được gửi từ web hướng nghiệp của THPT Nghĩa Minh';  
        $mail->Body  = '<h3>Chào '.$hovaten.'</h3>';
        $mail->Body  .= '<center><img src='.$chartUrl.' alt="2" style="width: 300px;height:300px;"></center>';
        $mail->Body  .= ''.$haha.'';
        $mail->Body  .= '<p><strong>Cám ơn bạn đã sử dụng trang web của chúng tôi. Mong bạn sớm tìm ra ngành học đúng hợp với tính cách và sở thích của mình. Một lần nữa cám ơn các bạn nhiều</strong></p>';
        if($mail->send()) {                                     // phải bật cho ứng dụng kém  được dùng ở     myaccount.google.com
          $url = "thanhcong.php?id=" . $idkhach;
          header('location:' . $url);
        } else {  
        echo 'Message could not be sent';  
        }  
        
        
        
     


?>