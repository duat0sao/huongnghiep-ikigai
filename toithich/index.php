<?php
include '../config.php';


$idkhach = $_GET['id'];

$cauhoi = rand(1,17);

$query=mysqli_query($conn,"select * from `toithichgi` where idkhach='$idkhach'");
$row=mysqli_fetch_assoc($query);


$query1=mysqli_query($conn,"select * from `noidungcauhoi` where idcauhoi='$cauhoi'");
$row1=mysqli_fetch_assoc($query1);


if (isset($_POST['update_user'])){
  
  $noidung=$_POST['gia'];
  
  

  if ($conn->connect_error) {
  
  }
   
  $sql = "INSERT INTO `toithichgi`(idkhach, idcauhoi, noidung) VALUES('$idkhach', '$cauhoi', '$noidung');";
  mysqli_query($conn,$sql);
  $url = "../index1.php?id=" . $idkhach . "";
  header('location:' . $url);


  
  
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
         
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
  background-color:white;
  font-size: 20px;
  font-family: 'Poppins', sans-serif;
  /* background-image: linear-gradient(); */
  display: flex;
  justify-content: center;
}


.align-center {
  width: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.text-center {
  text-align: center;
}

.question {
  font-size: 2rem;
  margin-bottom: 1.2rem;
}

.btn-primary {
  display: block;
  width: 100%;
  padding: 10px 20px;
  font-size: 1.2rem;
  margin-top: 0.8rem;
  background-color: rgb(58, 58, 184);
  border-color: rgb(58, 58, 184);
  color: #fff;
}

.btn-primary:hover {
  background-color: rgb(24, 24, 177);
  border-color: rgb(24, 24, 177);
  color: #fff;
  cursor: pointer;
}

.blue {
  background-color: rgb(58, 58, 184);
  color: #fff;
  padding: 15px 20px;
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
}

p {
  font-size: 1rem;
  margin-top: 0.5rem;
  line-height: 1.5rem;
}

.hide {
  display: none;
}
@media only screen and (min-width: 600px) {
  .container1{
    width: 600vh;
    height: 100vh;
    /* background-color: turquoise; */
    position: relative;
    }

    h2.header {
        width: 100%;
        color: #e9558b;
        font-size: 50px;
        margin: 60px auto 20px;
        text-align: center;
    }
    .form-group1{
        width: 500px;
        margin: 0 auto;
        overflow: hidden;
        padding: 20px;
        border: 1px solid white;
        border-radius: 15px;
    }
}



canvas#myChart {
  margin-top: 120px;
  margin-bottom: 40px;
}

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>




    <div>
    	<div class="row justify-content-center hang">

            <h2 class="header">Bạn thích gì?</h2>

    		<form method="POST" class="form" id="form-1" >
        <center>
        <div class="form-group1 mb-3">
    		  	
            <label class="form-message"></label>
                <div class="cauhoi">
                <label> <?php echo $row1['noidungcauhoi']; ?></label><br>
                <input type="input" class="form-contr" name="gia" value="">
          
                </div>
       
                </div>
			
    		  
                <div class="footer">
                    <div class="footer_l">
                        
                        <button name="update_user" class="btn">Submit</button>
                        
                       
                    </div>
                    
                  </div>


                  
              </center>
    		</form>
    	</div>
    </div>

   



    
</body>
</html>