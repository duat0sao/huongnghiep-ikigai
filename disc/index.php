<?php
include '../config.php';


$idkhach = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DISC Quiz</title>
    <link rel="stylesheet" href="../holland1/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src = "https://code.highcharts.com"> </script>

<style>
  
@media screen and (max-width: 800px) {
.graph-container {
        display: block;
        float: none;
        width: 100%;
        margin-top: 0px;
        margin-right:0px;
        margin-left:0px;
        height: auto;
    }
}
</style>
    

  </head>
  <body>

<nav style="background-color:#47bdec;">
        <a style="display:inline-block; padding:10px; font-size:20px; color:white; text-decoration:none;" href="../toigioi.php?id=<?php echo $idkhach;?>">THPT Nghĩa Minh</a>
        <a style="display:inline-block; padding:10px; font-size:20px; color:white; text-decoration:none; float: right; margin-right: 5px;" href="../loginandout/logout.php">Thoát</a>
</nav>

    


    <div class="align-center text-center">
      <h2 id="h22" style="display: block;">Hãy chọn đáp án phù hợp nhất với mình</h2>
      <div class="answers">
      <h5 id="h223" style="display: block;"><sub>Hãy chọn đáp án phù hợp nhất với mình</sub></h5>
        <button class="question1 btn btn-primary absolutely" value="a" type="button" id="1">
          
        </button>
        <button class="question2 btn btn-primary very" value="b" type="button" id="1">
          
        </button>
        <button class="question3 btn btn-primary normal" value="c" type="button" id="1">
          
        </button>
        <button class="question4 btn btn-primary maybe" value="d" type="button" id="1">
          
        </button>
      
        <h4 class="" id="thutu" style="display: block;">/54</h4>
        <br><br> 
        <a class="btn " href="../toigioi.php?id=<?php echo $idkhach;?>" id="taga" style="display: block;">Trở lại</a>
        
      </div>
    </div>

    

    <div class="align-center">

      
      

      <h1 class="text-center" style="display: none;" id="resultIntro">
          
      </h1>

      <div class="container container1 hide">
        <div class="row justify-content-center">
          
          <div class="graph-container">
            <canvas id="myChart"></canvas>
          </div>
          <br>

        </div>
      </div>
      <div class="result blue" style="display: none;"></div>
      <div class=""></div>
      <a class="btn btn-primary"  href="../toigioi.php?id=<?php echo $idkhach;?>" id="hello" style="display: none;">Trang chủ</a>
    </div>



    
    

    <script src="disc.js"></script>
  </body>
</html>
