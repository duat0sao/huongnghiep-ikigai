<?php

   
    $cau1 = $_POST['cau1'];
    $cau2 = $_POST['cau2'];
    $cau3 = $_POST['cau3'];
    $cau4 = $_POST['cau4'];
    $cau5 = $_POST['cau5'];
    $cau6 = $_POST['cau6'];
    $cau7 = $_POST['cau7'];
    $cau8 = $_POST['cau8'];
    $cau9 = $_POST['cau9'];


    $ketqua1 = $_GET['kq1'];
    $ketqua2 = $_GET['kq2'];
    $ketqua3 = $_GET['kq3'];
    $ketqua4 = $_GET['kq4'];
    $ketqua5 = $_GET['kq5'];



    $ketqua6 = $cau1 + $cau2 + $cau3 + $cau4 + $cau5 + $cau6 + $cau7 + $cau8 + $cau9;
    
    #header('Location: ../index.html');
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chúc mừng bạn được <?php echo $ketqua6; ?> điểm</h1>
    <button><a href="ketqua.php?kq1=<?php echo $ketqua1; ?>&kq2=<?php echo $ketqua2;?>&kq3=<?php echo $ketqua3;?>&kq4=<?php echo  $ketqua4;?>&kq5=<?php echo $ketqua5;?>&kq6=<?php echo  $ketqua6;?>">Tiếp tục</a></button>
</body>
</html>
