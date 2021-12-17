<?php 
include 'config.php';
$idkhach = $_GET['id'];
?>

<!doctype html >

 <html lang="vi"> 
<head>
    <title>Tìm hiểu ngành nghề: Ngành Giáo dục học (Mã XT: 7140101)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

<body class="container">

        
<?php
                    $idkhach = $_GET['id'];
                    $sql10="select hovaten from khach where idkhach='$idkhach'";
                    
                    $layid=mysqli_query($conn, $sql10);
                    $row=mysqli_fetch_array($layid);
                    $tenkhach = $row['hovaten'];

?>
<header class="container">
      <nav class="navbar navbar-expand-sm header-top">
          <a class="navbar-brand" href="index1.php?id=<?php echo $idkhach;?>" style="width:100; font-size: 25px;">
                 THPT Nghĩa Minh
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId" style="z-idex: 1; background: white; box-shadow: 1px 1px 1px #aaa; boder-radius: 3px;">
          </div>
          <div class="narr">
              <ul class="nav justify-content-end">
                  
                     
                      
                          
                          
                          <li class="nav-item">
                              <a style="width:100; font-size: 13px;" class="nav-link active" href="loginandout/logout.php">Thoát</a>
                          </li>
                  
              </ul>
          </div>
      </nav>
      <span style="padding: 0 12px; color: #367cff; font-size: 18px"><sub> Hành trình khám phá bản thân</sub></span>
      <nav class="navbar navbar-expand-lg navbar-light header-bottom">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="width:100; font-size: 10px;"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a style="width:100; font-size: 15px;" class="nav-link" href="index1.php?id=<?php echo $idkhach;?>"><strong>Trang chủ</strong><span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a style="width:100; font-size: 15px;" class="nav-link" href="#">Giới thiệu</a>
                  </li>
                 
                  <li class="nav-item">
                      <a style="width:100; font-size: 15px;" class="nav-link" href="banthan.php?id=<?php echo $idkhach;?>">Cá nhân</a>
                  </li>
              </ul>
              
          </div>
      </nav>
  </header>
       
        
<?php 
$a = $_GET['mg'];

$query=mysqli_query($conn,"select * from nhomnganh where manganh='$a'");
$row=mysqli_fetch_array($query);

$query1=mysqli_query($conn,"select * from gioithieu where manganh='$a'");
$row1 =mysqli_fetch_array($query1);

?>
          
            
<div class="td-main-content-wrap td-container-wrap">

    <div class="td-container td-post-template-5 ">
        
                                    
    <article id="post-10844" class="post-10844 post type-post status-publish format-standard has-post-thumbnail category-nganh" itemscope itemtype="https://schema.org/Article">
        <div class="td-post-header">

            
            <header class="td-post-title">
                <center><h1 class="entry-title"><?php echo $row['tennganh'];?></h1></center>

                

                

            </header>

        </div>

        <div class="td-post-sharing-top"><div id="td_social_sharing_article_top" class="td-post-sharing td-ps-bg td-ps-notext td-post-sharing-style1 ">
		

		

        <div class="td-post-content tagdiv-type">


            <p><?php echo $row1['gtmot'];?></p>

<h2><strong>GIỚI THIỆU CHUNG</strong></h2>


<p><?php echo $row1['gtchung'];?></p>




<p><?php echo $row1['ctdaotao'];?></p>








<h2>NHỮNG TRƯỜNG ĐÀO TẠO</h2>

<table class="table">
<tbody>
<tr>
<td><strong>Tên trường</strong></td>
<td><strong>Điểm chuẩn 2021</strong></td>
</tr>

<?php 
$query3=mysqli_query($conn,"select * from truong where manganh='$a'");
while($row3=mysqli_fetch_array($query3)){
?>

<tr>
<td><?php echo $row3['tentruong'];?></td>
<td><?php echo $row3['diem'];?></td>
</tr>

</tbody>
<?php }?>
</table>



<h2><strong>Các khối xét tuyển ngành</strong></h2>
<p></p>

<ul>


<?php 
$query2=mysqli_query($conn,"select * from khoixettuyen where manganh='$a'");
while($row2=mysqli_fetch_array($query2)){
?>
<li><?php echo $row2['khoi'];?></li>

<?php }?>

</ul>
<h2><strong>Chương trình đào tạo ngành <?php echo $row['tennganh'];?></strong></h2>

<p>Chi tiết như sau:</p>
<table class="table">
<tbody>
<tr>
<td>
<?php 
$query4=mysqli_query($conn,"select * from ctdaotaoct where manganh='$a'");
while($row4=mysqli_fetch_array($query4)){
?>

<ul>

<li><?php echo $row4['ctdtct'];?></li>

</ul>

<?php }?>
</td>
</tr>
</tbody>
</table>
<h2><strong>Cơ hội việc làm sau tốt nghiệp</strong></h2>
<p><?php echo $row1['cohoi'];?></p>


  <center><button class="btn"><a href="holland1/nhomnganh.php?id=<?php echo $idkhach;?>"> trở về</a></button></center>
<br><br><br><br>

</body>
</html>
