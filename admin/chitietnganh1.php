<?php 
include '../config.php';
$idkhach = $_GET['id'];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Chi tiết nhóm ngành</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        
<?php
                    $idkhach = $_GET['id'];
                    $sql10="select hovaten from khach where idkhach='$idkhach'";
                    
                    $layid=mysqli_query($conn, $sql10);
                    $row=mysqli_fetch_array($layid);
                    $tenkhach = $row['hovaten'];

?>


<nav style="background-color:#47bdec;">
        <a style="display:inline-block; padding:10px; font-size:25px; color:white; text-decoration:none;" href="admin.php">IKIGAI</a>
        
      
</nav> 
       
        
<?php 
$a = $_GET['mg'];

$query=mysqli_query($conn,"select * from nhomnganh where manganh='$a'");
$row=mysqli_fetch_array($query);

$query1=mysqli_query($conn,"select * from gioithieu where manganh='$a'");
$row1 =mysqli_fetch_array($query1);

?>
   <br><br><br>       
            
<div class=" container td-main-content-wrap td-container-wrap">

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


  <center><button class="btn"><a href="xemthem.php?id=<?php echo $idkhach;?>"> trở về</a></button></center>
<br><br><br><br>

</body>
</html>
