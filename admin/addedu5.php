<?php
include '../config.php';




if (isset($_POST['update_user'])){
  
  $nhomng=$_POST['nhomng'];  //kv
  $tenng=$_POST['tenng'];    //ten truong
  $mang=$_POST['mang'];     //ma nganh
  $diemchuan=$_POST['thuoctinh'];   //diem
  
  

  if ($conn->connect_error) {
  
  }
   
  $sql = "INSERT INTO `truong`(kv, tentruong, manganh, diem) VALUES('$nhomng', '$tenng', '$mang', '$diemchuan');";
  mysqli_query($conn,$sql);
  
  header('location: addedu5.php');


  
  
  }







?>


   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    
    <style>




    h2.header {
        width: 100%;
        color: #e9558b;
        font-size: 50px;
        margin: 60px auto 20px;
        text-align: center;
    }
  
    }
}



    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Thêm ngành nghề vào dữ liệu</title>
</head>
<body>

<nav style="background-color:#47bdec;">
        <a style="display:inline-block; padding:10px; font-size:25px; color:white; text-decoration:none;" href="admin.php">IKIGAI</a>
        
      
</nav>
<br>
<div>
                        
                        <center>  <a href="admin.php" class="">Trang chủ</a></center>    
                              
                             
                          </div>



    <div>
    	<div>

            

    		<form method="POST" class="form" id="form-1" >
        <center>
        <div class="mb-3">
    		  	
            <label class="form-message"></label>
                <div class="cauhoi">

                <br><h4>Mã ngành</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="mang" value="">
                <br><h4>Tên trường</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="tenng" value="">
                <br><h4>khu vực</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="nhomng" value="">
                <br><h4>Điểm</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="thuoctinh" value="">
                
          
                </div>
       
                </div>
			
    		  
                <div class="footer">
                    <div class="footer_l">
                        
                        <button name="update_user" class="btn" style="width:100; font-size: 20px;">Thêm</button>
                        
                       
                    </div>
                    
                  </div>


                  
              </center>
    		</form>
    	</div>
    </div>

   



    
</body>
</html>