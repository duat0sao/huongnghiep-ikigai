
<?php include '../config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <title>ADMIN quản lý</title>
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
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
  </header>




<br><br><br>
    

   <div class="container">
   
    <table class="table">
      <thead>
        <tr>
          <th>Họ và Tên</th>
          <th>Mail</th>
          <th>SĐT</th>
          <th>Thuộc Nhóm</th>
        </tr>
      </thead>
      <?php   
    
    $query=mysqli_query($conn,"select * from khach");
    
    while($row=mysqli_fetch_array($query)){
    
    ?>
      <tbody>
        <tr>
          <td scope="row"><?php
$idfake = $row['idkhach'];
$query2=mysqli_query($conn,"select * from khach where idkhach='$idfake'");
$row2=mysqli_fetch_array($query2);
echo $ten = $row2['hovaten']; ?></td>
          <td><?php echo $row2['email'];?></td>
          <td><?php echo $row2['sdt'];?></td>
          <td><?php   
    
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
    
    
    ?> </td>
          <td>
            <td><a href="xemthem.php?id=<?php echo $idfake;?>">Xem thêm</a></td>
            <td><a href="xoa.php?id=<?php echo $idfake;?>">Xóa</a></td>
        </td>
          
        </tr>
      </tbody>
      <?php 
    }?>
    </table>
    

    </div> 
    





    
                                       
      
        
       
    
    
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>