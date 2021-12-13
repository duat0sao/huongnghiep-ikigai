
<?php include 'config.php';






?>


<!doctype html>
<html lang="en">
  <head>
    <title>Bản thân</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php include 'header.php';?>
<br><br><br>
        <div class="container">
            <ul class="nav nav-pills mb-3">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">DISC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Holland</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sở thích</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                          

                            <th>Nhóm 1</th>
                            <th>Nhóm 2</th>
                            <th>Nhóm 3</th>
                            <th>Nhóm 4</th>
                          </tr>
                        </thead>
<?php   
$idkhach = $_GET['id'];
$query=mysqli_query($conn,"select * from disc where idkhach='$idkhach'");
$row=mysqli_fetch_array($query)
?>
                        <tbody>
                          <tr>
                          
                            <td><?php echo $row['nhom1']; ?></td>
                            <td><?php echo $row['nhom2']; ?></td>
                            <td><?php echo $row['nhom3']; ?></td>
                            <td><?php echo $row['nhom4']; ?></td>
                          </tr>
                        </tbody>
                    </table>
                </div>


                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Người thực tế</th>
                            <th scope="col">Người thích nghiên cứu</th>
                            <th scope="col">Người có tính nghệ sỹ</th>
                            <th scope="col">Người có tính xã hội</th>
                            <th scope="col">Người dám nghĩ dám làm</th>
                            <th scope="col">Người công chức</th>
                          </tr>
                        </thead>
<?php   

$query1=mysqli_query($conn,"select * from holland where idkhach='$idkhach'");
$row1=mysqli_fetch_array($query1)
?>
                        <tbody>
                          <tr>
                            
                            <td><?php echo $row1['bo1']; ?></td>
                            <td><?php echo $row1['bo2']; ?></td>
                            <td><?php echo $row1['bo3']; ?></td>
                            <td><?php echo $row1['bo4']; ?></td>
                            <td><?php echo $row1['bo5']; ?></td>
                            <td><?php echo $row1['bo6']; ?></td>
                          </tr>
                          
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                              <th>Câu hỏi</th>
                              <th>Câu trả lời</th>

                              
                            </tr>
                          </thead>
<?php
$query2=mysqli_query($conn,"select * from toithichgi where idkhach = '$idkhach'");


while($row2=mysqli_fetch_array($query2)){
    $idcauhoi = $row2['idcauhoi'];
    $query3=mysqli_query($conn,"select * from noidungcauhoi where idcauhoi = '$idcauhoi'");
    $row3=mysqli_fetch_array($query3);
?>
                          <tbody>
                            <tr>
                              <td><?php echo $row3['noidungcauhoi']; ?></td>
                              <td><?php echo $row2['noidung']; ?></td>
                              
                            </tr>
                            
                          </tbody>
                          <?php }?>
                        </table>
                </div>
                
            </div>
            
        </div>
        <center><a class="btn" href="send.php?id=<?php echo $idkhach;?>">Gửi về mail</a></center>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>