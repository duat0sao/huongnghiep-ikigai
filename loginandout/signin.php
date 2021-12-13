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
			$password2 = trim($_POST['password2']);
	if (!empty($password1)) {
		if ($password1 !== $password2) { //#4
			$errors[] = 'Nhập mật khẩu sau mời bạn nhập lại.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
    }
    
    if (empty($errors)) {
   

    
    $randstring=generateRandomString();

    //execute query
    $sql="insert into khach(hovaten, email, matkhau, sdt) VALUES ('$hovaten','$email','$password1', '$sdt')";



    
     if(mysqli_query($conn,$sql)){
        $sql1="select idkhach from khach where email='$email'";
        $result=mysqli_query($conn,$sql1);
        $layid=mysqli_query($conn, $sql1);
        $row=mysqli_fetch_array($layid);
        $idkhach = $row['idkhach'];
       
        mysqli_query($conn,"INSERT INTO holland(idkhach) VALUES('$idkhach')");
        mysqli_query($conn,"INSERT INTO disc(idkhach) VALUES('$idkhach')");
		
        
        
        header('location:../index.php');
        
        

        
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