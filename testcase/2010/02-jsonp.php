<?php
// 获取回调函数名字
$fn = $_GET['fn'];
$data = json_encode([
  "food1"=>"臭豆腐",
  "food2"=>"毛鸡蛋",
  "food3"=>"鲱鱼罐头",
  "food4"=>"榴莲"
	]);

echo $fn."('$data')";
?>