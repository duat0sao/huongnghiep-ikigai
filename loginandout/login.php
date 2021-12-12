



<?php
session_start();
include '../config.php';
if(isset($_POST['sign-in']) && $_POST['email'] != '' && $_POST['password'] != ''){
    $t1 = $_POST['email'];
    $t2 = $_POST['password'];
    $sql = "SELECT * FROM khach WHERE email = '$t1' AND matkhau = '$t2'";
    $duyet = mysqli_query($conn,$sql);
    if(mysqli_num_rows($duyet)>0){
        $_SESSION['email']= $t1;
        $o = mysqli_fetch_row($duyet);
        
        $_SESSION['thongbao']='dang nhap thanh cong';
        


      
                    
        $sql1="select idkhach from khach where email='$t1'";
        $sql2="select hovaten from khach where email='$t1'";
                    
        $layid=mysqli_query($conn, $sql1);
        $laytenkh=mysqli_query($conn, $sql2);
        $row1=mysqli_fetch_array($layid);
        $row=mysqli_fetch_array($laytenkh);

        $idkhach = $row1['idkhach'];
        $tenkh = $row['hovaten'];
                  
        
        echo "Xin chào " . $tenkh . ". Bạn đã đăng nhập thành công. <a href='../index1.php?id=". $idkhach ."'>Về trang chủ</a>";
        die();
       
    }
    else {
        $_SESSION['thongbao']='tai khoan va mat khau khong chinh xac';
        header('location:../index.php');
        
    }
}
else {
    $_SESSION['thongbao']='vui long nhap day du thong tin dang nhap';
    header('location:../index.php');
    
}
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>