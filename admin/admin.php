
<?php include '../config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Bản thân</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      



  <header>
      <nav class="navbar navbar-expand-sm header-top">
          <a class="navbar-brand logo" href="#">
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
                      <a class="nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>
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




<br><br><br>
        
<div id="generic_price_table">   
    
    <?php   
    
    $query=mysqli_query($conn,"select * from khach");
    
    while($row=mysqli_fetch_array($query)){
    
    ?>
    
    <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--PRICE HEADING START-->
                        <div class="price-heading clearfix">
                            <h1></h1>
                        </div>
                        <!--//PRICE HEADING END-->
                    </div>
                </div>
            </div>
    
    
    
    
    
    
            <div class="container">
                
                <!--BLOCK ROW START-->
                <div class="">
                    <div class="col-md-4">
                    
                      <!--PRICE CONTENT START-->
                        <div class="generic_content clearfix">
                            
                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">
                            
                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">
                                
                                  <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>
<?php
$idfake = $row['idkhach'];
$query2=mysqli_query($conn,"select * from khach where idkhach='$idfake'");
$row2=mysqli_fetch_array($query2);
echo $ten = $row2['hovaten']; ?></span>
                                    </div>
                                    <!--//HEAD END-->
                                    
                                </div>
                                <!--//HEAD CONTENT END-->
                                
                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">	
                                    <span class="price">
                                        <span class="sign">
    <?php   
    
    $query1=mysqli_query($conn,"select * from holland where idkhach='$idfake'");
    $row1=mysqli_fetch_array($query1);

    $bo1 = $row1['bo1'];
    $bo2 = $row1['bo2'];
    $bo3 = $row1['bo3'];
    $bo4 = $row1['bo4'];
    $bo5 = $row1['bo5'];
    $bo6 = $row1['bo6'];
    
    $listbo = array($bo1,$bo2,$bo3,$bo4,$bo5,$bo6);
    $maxbo = max($listbo);
    
    switch ($maxbo) {
        case $bo1:
          echo "Người thực tế";
          break;
        case $bo2:
          echo "Người nghiên cứu";
          break;
        case $bo3:
          echo "Nghệ sỹ";
          break;
        case $bo4:
          echo "Xã hội";
          break;
        case $bo5:
          echo "Thiên phú lãnh đạo";
          break;
        case $bo6:
          echo "Mẫu người công chức";
          break;
        default:
          echo "error";
          break;
        }
    
    
    ?> 
                                        </span>
                                        
                                    </span>
                                </div>
                                
                                
                            </div>                            
                            
                            
                            <!--BUTTON START-->
                            <div class="generic_price_btn clearfix">
                              <a class="" href="xemthem.php?id=<?php echo $idfake;?>">Xem thêm</a>
                            </div>
                            <!--//BUTTON END-->
                            
                        </div>
                        <!--//PRICE CONTENT END-->
                            
                    </div>
                    
                    
                    
                </div>	
                <!--//BLOCK ROW END-->
                
            </div>
    
    
        </section>    
        <?php 
    }?>
        
        
    
    
    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>