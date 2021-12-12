
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <?php include '../nen.php'; ?>
    
    <div class="container1">
    	<div class="row justify-content-center hang">

            <h2 class="header">Trắc Nghiệm D.I.S.C Online</h2>
            <h4>Chọn đáp án bạn thấy đúng nhất với mình</h4>

    		<form id="form-1">

                <div class="content"></div>
			
    		  <div class="footer">
                <div class="footer_l">
                    <input type="button" class="preview vohieuhoa" value="Preview" disabled>
                    <input type="button" class=" next" value="Next">
                </div>
                <div class="footer_r">
                    <button class="form-submit vohieuhoa" disabled>Submit</button>
                </div>
              </div>
    		</form>
    	</div>
    </div>

    <script src="showdata.js"></script>

    <script src="xuly.js"></script>

    <script src="xuly_click.js"></script>
</body>
</html>