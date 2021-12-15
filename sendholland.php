<?php 
include('config.php');
$idkhach = $_GET['id'];

$query2=mysqli_query($conn,"select * from khach where idkhach='$idkhach'");
$row2=mysqli_fetch_array($query2);
$eail = $row2['email'];
$hovaten =$row2['hovaten'];
$query3=mysqli_query($conn,"select * from holland where idkhach='$idkhach'");
$row3=mysqli_fetch_array($query3);


$bo1 = $row3['bo1'];
$bo2 = $row3['bo2'];
$bo3 = $row3['bo3'];
$bo4 = $row3['bo4'];
$bo5 = $row3['bo5'];
$bo6 = $row3['bo6'];


$listbo = array($bo1,$bo2,$bo3,$bo4,$bo5,$bo6);
$maxbo = max($listbo);
switch ($maxbo) {
case $bo1:
  $a = '<h1>Người thực tế</h1>';
  $b = '<p>Người thuộc nhóm sở thích nghề nghiệp này thường có khả năng về kỹ thuật, công nghệ, hệ thống; ưa thích làm việc với đồ vật, máy móc, động thực vật; thích làm các công việc ngoài trời.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm những nghề về kiến trúc, an toàn lao động, nghề mộc, xây dựng, thủy sản, kỹ thuật, máy tàu thủy, lái xe, huấn luyện viên, nông - lâm nghiệp (quản lý trang trại, nhân giống cá, lâm nghiệp...), cơ khí (chế tạo máy, bảo trì và sửa chữa thiết bị, luyện kim, cơ khí ứng dụng, tự động...), điện - điện tử, địa lý - địa chất (đo đạc, vẽ bản đồ địa chính), dầu khí, hải dương học, quản lý công nghiệp...</p>';
  break;
case $bo2:
  $a = '<h1>Người nghiên cứu</h1>';
  $b = '<p>Có khả năng về quan sát, khám phá, phân tích đánh giá và giải quyết các vấn đề.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành thuộc lĩnh vực khoa học tự nhiên (toán, lý, hóa, sinh, địa lý, địa chất, thống kê...); khoa học xã hội (nhân học, tâm lý, địa lý...); y - dược (bác sĩ gây mê, hồi sức, bác sĩ phẫu thuật, nha sĩ...); khoa học công nghệ (công nghệ thông tin, môi trường, điện, vật lý kỹ thuật, xây dựng...); nông lâm (nông học, thú y...).</p>';
  break;
case $bo3:
  $a = '<h1>Nghệ sỹ</h1>';
  $b = '<p>Có khả năng về nghệ thuật, khả năng về trực giác, khả năng tưởng tượng cao, thích làm việc trong các môi trường mang tính ngẫu hứng, không khuôn mẫu.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành về văn chương; báo chí (bình luận viên, dẫn chương trình...); điện ảnh, sân khấu, mỹ thuật, ca nhạc, múa, kiến trúc, thời trang, hội họa, giáo viên dạy sử/Anh văn, bảo tàng, bảo tồn...</p>';
  break;
case $bo4:
  $a = '<h1>Xã hội</h1>';
  $b = '<p>Có khả năng về ngôn ngữ, giảng giải, thích làm những việc như giảng giải, cung cấp thông tin, sự chăm sóc, giúp đỡ, hoặc huấn luyện cho người khác.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: sư phạm; giảng viên; huấn luyện viên điền kinh; tư vấn - hướng nghiệp; công tác xã hội, sức khỏe cộng đồng, thuyền trưởng, thư viện, bác sĩ chuyên khoa, thẩm định giá, nghiên cứu quy hoạch đô thị, kinh tế gia đình, tuyển dụng nhân sự, cảnh sát, xã hội học, bà đỡ, chuyên gia về X-quang, chuyên gia dinh dưỡng..</p>';
  break;
case $bo5:
  $a =  '<h1>Thiên phú lãnh đạo</h1>';
  $b = '<p>Có khả năng về kinh doanh, mạnh bạo, dám nghĩ dám làm, có thể gây ảnh hưởng, thuyết phục người khác, có khả năng quản lý.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành về quản trị kinh doanh (quản lý khách sạn, quản trị nhân sự...), thương mại, marketing, kế toán – tài chính, luật sư, dịch vụ khách hàng, tiếp viên hàng không, thông dịch viên, pha chế rượu, kỹ sư công nghiệp (ngành kỹ thuật hệ thống công nghiệp), bác sĩ cấp cứu, quy hoạch đô thị, bếp trưởng (nấu ăn), báo chí (phóng viên, biên tập viên...)...</p>';
  break;
case $bo6:
  $a = '<h1>Mẫu người công chức</h1>';
  $b = '<p>Có khả năng về số học, thích thực hiện những công việc chi tiết, thích làm việc với những số liệu, theo chỉ dẫn của người khác hoặc các công việc văn phòng.</p><p><b>Ngành nghề phù hợp</b> với nhóm này bao gồm: Các ngành nghề về hành chính, thống kê, thanh tra ngành, người giữ trẻ, điện thoại viên...</p>';
  break;
default:
  echo "error";
  break;
}

        require 'mailer/PHPMailerAutoload.php';  
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = '18lynnxx@gmail.com';               // your SMTP username  
        $mail->Password = 'matkhau3';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('18lynnxx@gmail.com', 'BOSS lv1');  
        $mail->addAddress('tduat183@gmail.com');                             // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'Sent from dotted career guidance';  
        $mail->Body  = '<h3>Dear '.$hovaten.'</h3>';
        $mail->Body  .= ''.$a.'';
        $mail->Body  .= ''.$b.'';

        if($mail->send()) {  
        echo 'Gửi thành công. <a href="banthan.php?id='.$idkhach.'>">Trở về</a> ';  
        } else {  
        echo 'Message could not be sent';  
        }  
        
        
        
     


?>