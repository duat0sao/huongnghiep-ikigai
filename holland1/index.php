<?php
include '../config.php';


$idkhach = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Holland Quiz</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src = "https://code.highcharts.com"> </script>

  </head>
  <body>

    <div class="align-center text-center">
      <h2 class="question"></h2>
      <div class="answers">
        <button class="btn btn-primary absolutely" value="4" type="button" id="1">
          Hoàn toàn đúng
        </button>
        <button class="btn btn-primary very" value="3" type="button" id="1">
          Đúng trong hầu hết trường hợp
        </button>
        <button class="btn btn-primary normal" value="2" type="button" id="1">
          Chỉ đúng một nửa
        </button>
        <button class="btn btn-primary maybe" value="1" type="button" id="1">
          Đúng trong vài trường hợp
        </button>
        <button class="btn btn-primary never" value="0" type="button" id="1">
          Không hề đúng
        </button>

        <br><br> 
        <a class="btn btn-primary" href="../toigioi.php?id=<?php echo $idkhach;?>" id="taga" style="display: block;">Trở lại</a>
        
      </div>
    </div>

    

    <div class="align-center">

      
      

      <h1 class="text-center" style="display: none;" id="resultIntro">
          
      </h1>

      <div class="container container1 hide">
        <div class="row justify-content-center">
          
          <div>
            <canvas id="myChart" style="width:100%; margin:auto; max-width:600px; height: 600px"></canvas>
          </div>
          <br><br><br><br>

        </div>
      </div>
      <div class="result blue" style="display: none;"></div>
    </div>
    

    <script src="holland.js"></script>
  </body>
</html>
