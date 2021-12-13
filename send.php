<?php 
include('config.php');

$idkhach = $_GET['id'];




        require 'mailer/PHPMailerAutoload.php';  
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = 'tduat183@gmail.com';               // your SMTP username  
        $mail->Password = 'matkhau3';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('tduat183@gmail.com', 'BOSS lv1');  
        $mail->addAddress('18lynnxx@gmail.com');                             // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'How to send email from localhost using php with mysqli';  
        $mail->Body  = '<h1>Welcome to động wibu</h1><h3>Dear </h3>';
        $mail->Body  .= '<p>Cảm ơn bạn đã đóng góp ý kiến </p>';
        $mail->Body  .= '<p>Chúng tôi sẽ liên hệ lại với bạn sớm nhất có thể </p>';
        
        if($mail->send()) {  
        echo 'Message has been sent';  
        } else {  
        echo 'Message could not be sent';  
        }  
        $url = "banthan.php?id=" . $idkhach . "";
        header('location:' . $url);
        die();
     


?>