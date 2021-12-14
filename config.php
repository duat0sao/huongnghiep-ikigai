<?php

define('HOST', 'localhost');
define('USERNAME', 'id18114017_admin');
define('PASSWORD', 'Anhhjew2k@@@');
define('DATABASE', 'id18114017_huongnghiep');
 

$conn=mysqli_connect('localhost', 'id18114017_admin', 'Anhhjew2k@@@', 'id18114017_huongnghiep');
if(!$conn){
    die("connect fail ".mysqli_connect_error());
}


?>