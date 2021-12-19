<?php 
include('config.php');
$idkhach = $_GET['id'];

$query2=mysqli_query($conn,"select * from khach where idkhach='$idkhach'");
$row2=mysqli_fetch_array($query2);
$eail = $row2['email'];
$hovaten =$row2['hovaten'];
$query3=mysqli_query($conn,"select * from holland where idkhach='$idkhach'");
$row3=mysqli_fetch_array($query3);
$query33=mysqli_query($conn,"select * from disc where idkhach='$idkhach'");
$row33=mysqli_fetch_array($query33);




$query32=mysqli_query($conn,"select * from toithichgi where idkhach = '$idkhach'");
$row32=mysqli_fetch_array($query32);
$hello = 1;

if ($row32['cau1']==''){
  $ci = 1;
}
else if ($row32['cau2']==''){
  $ci = 2;
}
else if ($row32['cau3']==''){
  $ci = 3;
}
else if ($row32['cau4']==''){
  $ci = 4;
}
else if ($row32['cau5']==''){
  $ci = 5;
}
else if ($row32['cau6']==''){
  $ci = 6;
}
else if ($row32['cau7']==''){
  $ci = 7;
}
else if ($row32['cau8']==''){
  $ci = 8;
}
else if ($row32['cau9']==''){
  $ci = 9;
}
else if ($row32['cau10']==''){
  $ci = 10;
}
else if ($row32['cau11']==''){
  $ci = 11;
}
else if ($row32['cau12']==''){
  $ci = 12;
}
else if ($row32['cau13']==''){
  $ci = 13;
}
else if ($row32['cau14']==''){
  $ci = 14;
}
else if ($row32['cau15']==''){
  $ci = 15;
} else{
  $ci = 16;
}
for($i=1; $i<$ci; $i++){
    $query333=mysqli_query($conn,"select * from noidungcauhoi where idcauhoi = '$i'");
    $row333=mysqli_fetch_array($query333);                      
    $cauhoi[$i] = $row333['noidungcauhoi'];
    $traloi[$i] = $row32['cau'.$i.''];   
                       
}
if ($row32['cau1']==''){
    $cii = 1;
  }
  else if ($row32['cau2']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]));
  }
  else if ($row32['cau3']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]));
  }
  else if ($row32['cau4']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]));
  }
  else if ($row32['cau5']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]));
  }
  else if ($row32['cau6']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]));
  }
  else if ($row32['cau7']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]));
  }
  else if ($row32['cau8']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]));
  }
  else if ($row32['cau9']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]));
  }
  else if ($row32['cau10']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]));
  }
  else if ($row32['cau11']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]));
  }
  else if ($row32['cau12']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]));
  }
  else if ($row32['cau13']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]),
        array('Câu hỏi'=>$cauhoi[12], 'Câu trả lời'=>$traloi[12]));
  }
  else if ($row32['cau14']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]),
        array('Câu hỏi'=>$cauhoi[12], 'Câu trả lời'=>$traloi[12]),
        array('Câu hỏi'=>$cauhoi[13], 'Câu trả lời'=>$traloi[13]));
  }
  else if ($row32['cau15']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]),
        array('Câu hỏi'=>$cauhoi[12], 'Câu trả lời'=>$traloi[12]),
        array('Câu hỏi'=>$cauhoi[13], 'Câu trả lời'=>$traloi[13]),
        array('Câu hỏi'=>$cauhoi[14], 'Câu trả lời'=>$traloi[14]));
  } else if($row32['cau16']==''){
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]),
        array('Câu hỏi'=>$cauhoi[12], 'Câu trả lời'=>$traloi[12]),
        array('Câu hỏi'=>$cauhoi[13], 'Câu trả lời'=>$traloi[13]),
        array('Câu hỏi'=>$cauhoi[14], 'Câu trả lời'=>$traloi[14]),
        array('Câu hỏi'=>$cauhoi[15], 'Câu trả lời'=>$traloi[15]));
  } else{
    $array = array(
        array('Câu hỏi'=>$cauhoi[1], 'Câu trả lời'=>$traloi[1]),
        array('Câu hỏi'=>$cauhoi[2], 'Câu trả lời'=>$traloi[2]),
        array('Câu hỏi'=>$cauhoi[3], 'Câu trả lời'=>$traloi[3]),
        array('Câu hỏi'=>$cauhoi[4], 'Câu trả lời'=>$traloi[4]),
        array('Câu hỏi'=>$cauhoi[5], 'Câu trả lời'=>$traloi[5]),
        array('Câu hỏi'=>$cauhoi[6], 'Câu trả lời'=>$traloi[6]),
        array('Câu hỏi'=>$cauhoi[7], 'Câu trả lời'=>$traloi[7]),
        array('Câu hỏi'=>$cauhoi[8], 'Câu trả lời'=>$traloi[8]),
        array('Câu hỏi'=>$cauhoi[9], 'Câu trả lời'=>$traloi[9]),
        array('Câu hỏi'=>$cauhoi[10], 'Câu trả lời'=>$traloi[10]),
        array('Câu hỏi'=>$cauhoi[11], 'Câu trả lời'=>$traloi[11]),
        array('Câu hỏi'=>$cauhoi[12], 'Câu trả lời'=>$traloi[12]),
        array('Câu hỏi'=>$cauhoi[13], 'Câu trả lời'=>$traloi[13]),
        array('Câu hỏi'=>$cauhoi[14], 'Câu trả lời'=>$traloi[14]),
        array('Câu hỏi'=>$cauhoi[15], 'Câu trả lời'=>$traloi[15]),
        array('Câu hỏi'=>$cauhoi[16], 'Câu trả lời'=>$traloi[16])
    );
  }


function build_table($array){
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$e = build_table($array);




$bo1 = $row3['bo1'];
$bo2 = $row3['bo2'];
$bo3 = $row3['bo3'];
$bo4 = $row3['bo4'];
$bo5 = $row3['bo5'];
$bo6 = $row3['bo6'];

$nhom1 = $row33['nhom1'];
$nhom2 = $row33['nhom2'];
$nhom3 = $row33['nhom3'];
$nhom4 = $row33['nhom4'];



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


$listnhom = array($nhom1,$nhom2,$nhom3,$nhom4);
$max = max($listnhom);
switch ($max) {
  case $nhom1:
    $c = '<h1> Người Thủ lĩnh</h1> 
    <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.';
    break;
  case $nhom2:
    $c = ' <h1>Người tạo ảnh hưởng </h1>
    <b>Mô tả:</b> Người thuộc nhóm này chú trọng vào việc tạo ra ảnh hưởng hoặc thuyết phục người khác bằng sự cởi mở và những mối quan hệ của mình. Họ thường được mô tả là những người có sức thuyết phục, nhiệt tình, ấm áp, luôn lạc quan và có niềm tin vào người khác. Phong cách làm việc của họ luôn thể hiện sự hợp tác và nhiệt tình. Những người Tạo ảnh hưởng thường được thúc đẩy bởi sự công nhận xã hội (hoặc một nhóm người trong xã hội), vào những hoạt động nhóm và sự phát triển các mối quan hệ. Chính vì vậy mà họ sẽ sợ bị mất sự ảnh hưởng, bị từ chối hoặc bị bỏ qua.';
    break;
  case $nhom3:
    $c = '<h1> Người Thủ lĩnh</h1> 
                <b>Mô tả:</b> Những người nằm ở nhóm này quan trọng kết quả hoàn thành. Họ luôn tự tin và có động lực cạnh tranh để chiến thắng hoặc đạt được thành công. Họ luôn chấp nhận thử thách và hành động tức thì để đạt được kết quả. Những người thuộc nhóm Thủ lĩnh thường được mô tả là mạnh mẽ, tự tin, nhanh nhẹn, luôn tiếp cận vấn đề một cách trực tiếp. Tuy nhiên, điểm trừ của những người thuộc nhóm Thủ lĩnh là đôi khi họ bị giới hạn bởi sự vô tâm đối với người khác, thiếu kiên nhẫn và hay hoài nghi. Đôi khi họ cũng được cho là dễ bị tổn thương.';
    break;
  case $nhom4:
    $c = ' <h1>Người Tuân thủ</h1> 
    <b>Mô tả:</b> Những người thuộc nhóm Tuân thủ này thường chú trọng vào chất lượng và độ chính xác, chuyên môn, năng lực cá nhân. Họ thường tìm thấy động lực từ những cơ hội để đạt được kiến thức, những cơ hội giúp họ thể hiện được chuyên môn cá nhân và tạo ra những sản phẩm có chất lượng. Người Tuân thủ để ý đến độ chính xác trong công việc, họ luôn muốn duy trì sự ổn định trong công việc. Những người Tuân thủ cũng thường được được mô tả là người cẩn thận, thận trọng, làm việc có hệ thống, chính xác, lịch sự và biết cách ngoại giao. Tuy nhiên, họ có thể bị giới hạn bởi việc bị quá tải, bản thân bị cô lập, những lời chỉ trích và mắc sai lầm.';
    break;
  default:
    echo "error";
    break;


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
        $mail->Body  .= 'Bài kiểm tra Holland cho thấy bạn là '.$a.'';
        $mail->Body  .= ''.$b.'';
        $mail->Body  .= 'Bài kiểm tra DISC cho thấy bạn là'.$c.'';
        $mail->Body  .= '<br><br>Sở thích của bạn là: ';
        $mail->Body  .= ''.$e.'';
        $mail->Body  .= '<strong><sub>Cám ơn bạn đã sử dụng trang web của chúng tôi. Mong bạn sớm tìm ra ngành học đúng hợp với tính cách và sở thích của mình. Một lần nữa cám ơn các bạn nhiều</sub></strong>';
        if($mail->send()) {                                     // phải bật cho ứng dụng kém  được dùng ở     myaccount.google.com
          $url = "thanhcong.php?id=" . $idkhach;
          header('location:' . $url);
        } else {  
        echo 'Message could not be sent';  
        }  
        
        
        
     


?>