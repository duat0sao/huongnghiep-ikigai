<?php
include '../config.php';




if (isset($_POST['update_user'])){
  
  
  $mang=$_POST['mang'];
  $diemchuan=$_POST['thuoctinh'];
  
  

  if ($conn->connect_error) {
  
  }
   
  $sql = "INSERT INTO `ctdaotaoct`(manganh, ctdtct) VALUES('$mang', '$diemchuan');";
  mysqli_query($conn,$sql);
  
  header('location: addedu3.php');


  
  
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

<header>
      <nav class="navbar navbar-expand-sm header-top">
          <a class="navbar-brand logo" href="admin.php">
                  THPT Nghĩa Minh
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
          </div>
         
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light header-bottom">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="admin.php">Trang chủ<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Giới thiệu</a>
                  </li>
                
                  
                 
                  <li class="nav-item">
                      <a class="nav-link" href="#">Liên hệ</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
  </header>   




    <div>
    	<div>

            

    		<form method="POST" class="form" id="form-1" >
        <center>
        <div class="mb-3">
    		  	
            <label class="form-message"></label>
                <div class="cauhoi">

                
                
                <br><h4>Mã ngành</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="mang" value="">
                <br><h4>ctdaotao chi tiết</h4>
                <input style="width:100; font-size: 20px;" type="input" class="form-contr" name="thuoctinh" value="">
                
          
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