<?php

define('HOST', 'sql313.epizy.com');
define('USERNAME', 'epiz_30592060');
define('PASSWORD', 'T9bLtp7efyXcZY');
define('DATABASE', 'epiz_30592060_huongnghiep');
 

$conn=mysqli_connect('sql313.epizy.com', 'epiz_30592060', 'T9bLtp7efyXcZY', 'epiz_30592060_huongnghiep');
mysqli_set_charset($conn, 'UTF8');

if(!$conn){
    die("connect fail ".mysqli_connect_error());
}


?>