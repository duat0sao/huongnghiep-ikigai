<?php
include 'config.php';


$idkhach = $_GET['id'];
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Phân loại việc làm ở Việt Nam</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  
  <body>


<?php include 'header.php';?>






<br><br><br><br>



      <div class="container">
          <div><center><h3><strong>Danh mục nghề nghiệp ở Việt Nam</strong></h3></center></div>
          <br>
    <div class="content-detail" id="content">

<div class="desc">
    Vừa qua, Thủ tướng Chính phủ đã ban hành Danh mục nghề nghiệp Việt Nam (kèm theo Quyết định số 34/2020/QĐ-TTg). Quyết định này có hiệu lực thi hành kể từ ngày 15/1/2021.
    <br />
</div>







<br>



<div class="noidung">


    <div class="motkhoi">
      <h4 class="tdkhoi">1. Lãnh đạo, quản lý trong các ngành, các cấp và các đơn vị <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
    <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc1");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    <div class="motkhoi">
      <h4 class="tdkhoi">2. Nhà chuyên môn bậc cao <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc2");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->




    <div class="motkhoi">
      <h4 class="tdkhoi">3. Nhà chuyên môn bậc trung <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc3");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->





    <div class="motkhoi">
      <h4 class="tdkhoi">4. Nhân viên trợ lý văn phòng <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc4");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->




    <div class="motkhoi">
      <h4 class="tdkhoi">5. Nhân viên dịch vụ và bán hàng <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc5");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->



    <div class="motkhoi">
      <h4 class="tdkhoi">6. Lao động có kỹ năng trong nông nghiệp, lâm nghiệp, thủy sản <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc6");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->



    <div class="motkhoi">
      <h4 class="tdkhoi">7. Thợ thủ công và các nghề nghiệp có liên quan khác <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc7");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->




    <div class="motkhoi">
      <h4 class="tdkhoi">8. Thợ vận hành và lắp ráp máy móc, thiết bị <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc8");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->




    <div class="motkhoi">
      <h4 class="tdkhoi">9. Lao động giản đơn <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc9");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->




    <div class="motkhoi">
      <h4 class="tdkhoi">10. Lực lượng vũ trang <i class="anhicon fas fa-angle-down"></i></h4>
      <div class="ndkhoi">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Cấp 1</th>
                            <th>Cấp 2</th>
                            <th>Cấp 3</th>
                            <th>Cấp 4</th>
                            <th>Cấp 5</th>
                            <th>Tên gọi nghề nghiệp</th>
                          </tr>
                        </thead>
                        <?php   
    
    $query213=mysqli_query($conn,"select * from danhmuc10");
    
    while($row213=mysqli_fetch_array($query213)){
    
    ?>
                        <tbody>
                        <tr>
                              <td><?php echo $row213['cap1'];?></td>
                              <td><?php echo $row213['cap2'];?></td>
                              <td><?php echo $row213['cap3'];?></td>
                              <td><?php echo $row213['cap4'];?></td>
                              <td><?php echo $row213['cap5'];?></td>
                              <td><?php echo $row213['noidung'];?></td>
                          </tr>
                        </tbody>
                        <?php }?>
                    </table>
      </div> <!-- end nd khoi -->
    </div>  <!-- end moi khoi -->

    

</div>


</div>


      </div>
    <script>
      $(document).ready(function() {
      $('.tdkhoi').click(function(event) {
        /* Act on the event */
        $('.ndkhoi').slideUp();
        $('.tdkhoi').removeClass('xanhden');

        $(this).toggleClass('xanhden');

        $(this).next().slideToggle(600)
      });

      // code cho phan phong to anh
      // $('.vaicaianh a').fancybox();

      $('.ndkhoi').slideUp();
    });
    </script>
  </body>
</html>