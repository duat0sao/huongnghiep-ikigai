<?php
include 'config.php';


$idkhach = $_GET['id'];
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mời bạn chọn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;

}
@media only screen and (max-width: 600px) {
  body .center {
    top: 70%;
  }
  .hola,
  .disc {
      width: 200px;
      height: 200px;
      color: white;
    }
    .conttent {
    margin-top: 40px;
    display: auto;
    flex-direction: column;
    align-items: center;
  }
}


@media only screen and (min-width: 600px) {
  .logo {
    display: none;
  }


  .hola,
  .disc {
      width: 200px;
      height: 200px;
    }

  .home {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 40px;
  }

  div#navbarTogglerDemo02 {
    z-index: 1;
    background: #f8f7f7;
    box-shadow: 1px 1px 1px #ccc;
  }
}

@media only screen and (min-width: 768px) {
    .hola,
    .disc {
      width: 250px;
      height: 250px;

    }

    .home {
      position: absolute;
      top: 56px;
      left: 160px;
      width: 80px;
    }
}

@media only screen and (min-width: 992px) {
    .hola,
    .disc {
      width: 300px;
      height: 300px;

    }

    .home {
      position: absolute;
      top: 56px;
      left: 160px;
      width: 80px;
    }
}

@media only screen and (min-width: 1200px) {
    .hola,
    .disc {
      width: 400px;
      height: 400px;

    }

    .home {
      position: absolute;
      top: 56px;
      left: 176px;
      width: 100px;
    }
}

h1 {
  font-size: 4em;
  margin: 20px 0;
}

.center {
  width: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.center a {
  border: 1px solid black;
  border-radius: 5px;
  display: block;
  text-decoration: none;
  font-size: 1.2em;
  padding: 15px;
  margin: 10px 0;
  color: white;
  background-color: white;
  transition: 0.3s;
}

.center a:hover {
  cursor: pointer;
  background-color: white;
  transform: scale(1.1);
}

.home:hover {
  cursor: pointer;
  background-color: rgb(41, 41, 223);
  transform: scale(1.1);
}

.conttent {
  margin-top: 40px;
  width: 80%;
  display: flex;
  justify-content: space-around;
}

.logo {
    height: 150px;
    position: absolute;
    right: 120px;
    top: 32px;
}



    </style>
  </head>
  <body>
    
    

    <!-- them anh logo truong ???<img class="logo" src="img/log_nghiaminh.jpg" alt="">-->

  <?php include 'header.php';?>

    <div class="center conttent">
      <!-- <h2>Mời bạn chọn</h2> -->
      
      <div>
        <a href="holland1/index.php?id=<?php echo $idkhach;?>"><center><img class="hola" src="img/holland.png" alt="Responsive image"></center></a>
        <h4>Trắc nghiệm Holland: Nhóm ngành phù hợp</h4>
      </div>
      <div>
        <a href="disc/index.php?id=<?php echo $idkhach;?>"><center><img class="disc" src="img/disc.jpg" alt="Responsive image"></center></a>
        <h4>Trắc nghiệm DISC: Cách thể hiện trong công việc</h4>
      </div>

      
      
    </div>
    
  </body>
</html>
