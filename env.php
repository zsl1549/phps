<?php
// header('Content-Type: text/plain; charset=UTF-8');

echo "System Environment:<br/><hr>";
foreach ($_ENV as $key => $value) {
  echo "{$key}: {$value}<br/>";
}
// $servername = "localhost";
// $username = "username";
// $password = "password";
 
// // 创建连接
// $conn = new mysqli($servername, $username, $password);
 
// // 检测连接
// if ($conn->connect_error) {
//     die("连接失败: " . $conn->connect_error);
// } 
// echo "连接成功";
