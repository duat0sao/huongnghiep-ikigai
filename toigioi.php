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
    <link rel="stylesheet" href="holland1/style.css" />
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
}

@media only screen and (max-width: 600px) {
  .logo {
    display: none;
  }

  body .center {
    top: 60%;
  }

  .conttent {
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .hola,
  .disc {
      width: 250px;
      height: 250px;
    }

  .home {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 40px;
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
  background-color: rgb(0, 0, 197);
  transition: 0.3s;
}

.center a:hover {
  cursor: pointer;
  background-color: rgb(41, 41, 223);
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
    <div class="nen">
    

    <!-- them anh logo truong ??? <img class="logo" src="img/log_nghiaminh.jpg" alt="">-->

    <a href="index1.php?id=<?php echo $idkhach;?>"><img class="home" src="img/home.jpg" alt=""></a>

  </div>
    <div class="center conttent">
      <!-- <h2>Mời bạn chọn</h2> -->
      <div>
        <a href="holland1/index.php?id=<?php echo $idkhach;?>"><img class="hola" src="img/holland.png" alt="Responsive image"></a>
        <h4>Trắc nghiệm Holland</h4>
      </div>

      <div>
        <a href="test/index.php?id=<?php echo $idkhach;?>"><img class="disc" src="img/disc.jpg" alt="Responsive image"></a>
        <h4>Trắc nghiệm Disc</h4>
      </div>
      <!-- <a href="index1.php?id=<?php echo $idkhach;?>">Trang chủ</a> -->
    </div>
  </body>
</html>
