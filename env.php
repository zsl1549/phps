<?php
 header("Content-type: text/html; charset=utf-8");//设置编码
// header('Content-Type: text/plain; charset=UTF-8');

 // echo "System Environment:<br/><hr>";
  // echo phpinfo();
//   echo getenv('PATH'); //localhost

$MYSQL_USER=getenv('MYSQL_USER');

  if($MYSQL_USER){
$MYSQL_HOST = getenv('MYSQL_HOST');
$MYSQL_PORT = getenv('MYSQL_PORT');
$MYSQL_USER=getenv('MYSQL_USER');
$MYSQL_PASSWORD = getenv('MYSQL_PASSWORD');
$MYSQL_DATABASE = getenv('MYSQL_DATABASE');

// 创建连接
// $con = new mysqli($MYSQL_HOST:$MYSQL_PORT,$MYSQL_USER,$MYSQL_PASSWORD,$MYSQL_DATABASE) or die("数据库连接失败");
$conn = new mysqli(`$MYSQL_HOST:$MYSQL_PORT`,$MYSQL_USER,$MYSQL_PASSWORD);
// 检测连接
   // 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
echo "连接成功";
}
   
// 选择数据库

$db_selected = mysql_select_db($MYSQL_DATABASE, $con);
if (!$db_selected)
{
die ("Can\'t DB sdm163155241_db : " . mysql_error());
}

$tabelCount = 1;
$result = mysql_query("SHOW TABLES"); 
if($result)
{
while($row = mysql_fetch_array($result)) 
{ 
echo $tabelCount.": ".$row[0]. "<br/>"; 
$tabelCount++;
} 
}else
{
echo "query result is null";
} 



mysql_free_result($result); 
   
  }else{
    echo "没有Mysql";
  }

// foreach ($_ENV as $key => $value) {
//   echo "{$key}: {$value}<br/>";
// }
