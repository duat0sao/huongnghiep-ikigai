<?php

#define('HOST', 'localhost');
#define('USERNAME', 'epiz_30592060');
#define('PASSWORD', 'T9bLtp7efyXcZY');
#define('DATABASE', 'epiz_30592060_huongnghiep');
# 
#
#$conn=mysqli_connect('localhost', 'root', '', 'huongnghiep');
#if(!$conn){
#    die("connect fail ".mysqli_connect_error());
#}



define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'huongnghiep');


$conn=mysqli_connect('localhost', 'root', '', 'huongnghiep');
mysqli_set_charset($conn, 'UTF8');
if(!$conn){
    die("connect fail ".mysqli_connect_error());
}





?>