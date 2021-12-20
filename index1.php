<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

  <head>
    <title>Hướng nghiệp THPT Nghĩa Minh</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="ikigai.css">
    
    
  </head>


  <body>

  
<?php
include 'header.php';
?>


      





<br><br><br><br><br><br><br>
  <!-- ikigai -->
    <div class="page">
	    <div class="venn-wrapper">
		    <h1>IKIGAI</h1>
		    <div class="venn-1">
			    <p><a href="toithich.php?id=<?php echo $idkhach;?>"> Bạn<b> thích</b> cái gì?</a></p>
			    <span><b>Sứ mệnh</b></span>
		    </div>
		    <div class="venn-2">
			    <p><a href="duoctra.php?id=<?php echo $idkhach;?>"><b>Thế giới </b> cần gì?</a></p>
			    <span><b>Nghề nghiệp</b></span>
		    </div>
		    <div class="venn-3">
			    <p> <a href="phanloai.php?id=<?php echo $idkhach;?>">Bạn được<b> trả tiền</b> vì? </a></p>
			    </ul>
			    <span><b>Chuyên môn</b></span>
		    </div>
		    <div class="venn-4">
			    <p><a href="toigioi.php?id=<?php echo $idkhach;?>">Bạn <b>giỏi</b>  gì?</b></a></p>
			    <span><b>Đam mê</b></span>
		    </div>


	    </div>
    </div>
    <br><br><br>
        

        




      





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>