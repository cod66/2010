<?php
$fn = $_GET['cb'];
//echo $fn.'()';  // fn()

// 参数的传递
$str = '回家约会了..';
echo $fn."('$str')";
?>