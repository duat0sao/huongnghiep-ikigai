<?php

define('HOST', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'huongnghiep');
 

$conn=mysqli_connect('localhost', 'root', '', 'huongnghiep');
if(!$conn){
    die("connect fail ".mysqli_connect_error());
}


?>