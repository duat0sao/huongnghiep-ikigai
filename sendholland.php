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
        $mail->Body  .= '<br><br>Sở thích của bạn là: ';
        $mail->Body  .= ''.$e.'';
        $mail->Body  .= '<p><strong>Cám ơn bạn đã sử dụng trang web của chúng tôi. Mong bạn sớm tìm ra ngành học đúng hợp với tính cách và sở thích của mình. Một lần nữa cám ơn các bạn nhiều</strong></p>';
        if($mail->send()) {                                     // phải bật cho ứng dụng kém  được dùng ở     myaccount.google.com
          mysqli_query($conn,"update toithichgi set  cau1='', cau2='', cau3='', cau4='', cau5='', cau6='', cau7='',cau8='', cau9='', cau10='', cau11='', cau12='', cau13='', cau14='', cau15='', cau16='' where idkhach='$idkhach'");
          $url = "thanhcong.php?id=" . $idkhach;
          header('location:' . $url);
        } else {  
        echo 'Message could not be sent';  
        }  
        
        
        
     


?>