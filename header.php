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