<?php
                    $idkhach = $_GET['id'];
                    $sql10="select hovaten from khach where idkhach='$idkhach'";
                    
                    $layid=mysqli_query($conn, $sql10);
                    $row=mysqli_fetch_array($layid);
                    $tenkhach = $row['hovaten'];

?>





<nav style="background-color:#47bdec;">
        <a style="display:inline-block; padding:10px; font-size:20px; color:white; text-decoration:none;" href="index1.php?id=<?php echo $idkhach;?>">THPT Nghĩa Minh</a>
        <a style="display:inline-block; padding:10px; font-size:20px; color:white; text-decoration:none;" href="banthan.php?id=<?php echo $idkhach;?>">Cá nhân&nbsp;</a>
        <a style="display:inline-block; padding:10px; font-size:20px; color:white; text-decoration:none;" href="gioithieu1.php?id=<?php echo $idkhach;?>">Giới thiệu</a>
        <a style="display:inline-block; padding:10px; font-size:20px; color:blackk; text-decoration:none; float: right; margin-right: 5px;" href="loginandout/logout.php">Thoát</a>
</nav>
