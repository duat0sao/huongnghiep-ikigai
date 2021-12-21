<?php 
include('../config.php');
include('random.php');
 $errors = array(); // Initialize an error array. 

	// Check for a first name:                        
		$hovaten = trim($_POST['hovaten']);
	if (empty($hovaten)) {
		$errors[] = 'Mời bạn nhập lại Họ và Tên.';
	}
	// Check for a last name:
		$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'Mời bạn nhập lại Email.';
	}
	// Check for an email address:
		$sdt = trim($_POST['sdt']);
	if (empty($sdt)) {
		$errors[] = 'Mời bạn nhập lại sđt.';
    }

    $sql1="select * from khach where email='$email'";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
        $errors[] = 'Email đã được sử dụng mời bạn chọn email khác.';
    }
	// Check for a password and match against the confirmed password:
			$password1 = trim($_POST['password1']);
    
    if (empty($errors)) {
   

    
    $randstring=generateRandomString();

    //execute query
    $sql="INSERT INTO khach(hovaten, email, matkhau, sdt) VALUES ('$hovaten','$email','$password1', '$sdt')";



    
     if(mysqli_query($conn,$sql)){
        $sql1="select idkhach from khach where email='$email'";
        $result=mysqli_query($conn,$sql1);
        $layid=mysqli_query($conn, $sql1);
        $row=mysqli_fetch_array($layid);
        $idkhach = $row['idkhach'];
       
        mysqli_query($conn,"INSERT INTO holland(idkhach, bo1, bo2, bo3, bo4, bo5, bo6) VALUES('$idkhach', '0','0','0','0','0','0')");
        mysqli_query($conn,"INSERT INTO disc(idkhach,nhom1,nhom2,nhom3,nhom4) VALUES('$idkhach','0','0','0','0')");
		mysqli_query($conn,"INSERT INTO toithichgi(idkhach, cau1, cau2, cau3, cau4, cau5, cau6, cau7,cau8, cau9, cau10, cau11, cau12, cau13, cau14, cau15, cau16) VALUES('$idkhach', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')");
        
        $url = "../thanhcong.php?id=" . $idkhach . "";
        header('location:' . $url);
        
        

        
     }
    }else { // Report the errors.                                            
		$errorstring = "Error! <br /> The following error(s) occurred:<br>";
		foreach ($errors as $msg) { // Print each error.
			$errorstring .= " - $msg<br>";
		}
		$errorstring .= "Please try again.<br>";
        header("Location:error.php?error=$errorstring");
		}





?>