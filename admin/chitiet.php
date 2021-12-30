<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./style.css" />
    <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  
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
}
    </style>
  </head>
  <body>
    
<nav style="background-color:#47bdec;">
        <a style="display:inline-block; padding:10px; font-size:25px; color:white; text-decoration:none;" href="admin.php">IKIGAI</a>
        
</nav>  
    <div class="center">
      <h1>Chọn chức năng bạn muốn</h1>
      <a style="text-align:center;" href="addedu2.php">Thêm phần câu mở đầu, giới thiệu và cơ hội việc làm</a>
      <a style="text-align:center;" href="addedu4.php">Thêm phần khối xét tuyền của ngành</a>
      <a style="text-align:center;" href="addedu3.php">Chương trình đào tạo chi tiết</a>
      <a style="text-align:center;" href="addedu5.php">Thêm phần điểm chuẩn và các trường đào tạo</a>
      <a style="text-align:center;" href="./chon-nghe.html">Trang chủ</a>
    </div>
  </body>
</html>