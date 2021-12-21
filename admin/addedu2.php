<?php
include '../config.php';




if (isset($_POST['update_user'])){
  
  
  $cap1=$_POST['manganh'];
  $cap3=$_POST['ctdaotao'];
  $cap2=$_POST['gioithieu'];
  $cap5=$_POST['gtchung'];
  $cap4=$_POST['cohoi'];
  $noidung = $_POST['noidung'];
  
  

  if ($conn->connect_error) {
  
  }
   
  $sql = "INSERT INTO `danhmuc10`(cap1, cap2, cap3, cap4, cap5, noidung) VALUES('$cap1', '$cap2','$cap3','$cap4','$cap5', '$noidung');";
  mysqli_query($conn,$sql);
  
  header('location: addedu2.php');


  
  
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
    <title>Thâm ngành nghề vào dữ liệu</title>
</head>
<body>





    <div>
    	<div>

            

    		<form method="POST" class="form" id="form-1" >
        <center>
        <div class="mb-3">
    		  	
            <label class="form-message"></label>
                <div class="cauhoi">

                <br><h4>cap1</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="manganh" value="">
                <br><h4>cap2</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="gioithieu" value="">
                <br><h4>cap3</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="ctdaotao" value="">
                <br><h4>cap4</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="cohoi" value="">
                <br><h4>cap5</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="gtchung" value="">
                <br><h4>noi dung</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="noidung" value="">
                
          
                </div>
       
                </div>
			
    		  
                <div class="footer">
                    <div class="footer_l">
                        
                        <button name="update_user" class="btn" style="width:100; font-size: 20px;">Submit</button>
                        
                       
                    </div>
                    
                  </div>


                  
              </center>
    		</form>
    	</div>
    </div>

   



    
</body>
</html>