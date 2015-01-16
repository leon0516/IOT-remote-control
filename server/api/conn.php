<?php
// 主机
$ip = "127.0.0.1";
$port = "3306";
$host = $ip.":".$port;

// 用户名和密码
$user = "root";
$password = "123456";

// 数据库名称
$dbname = "db";

$conn = @mysql_connect($host,$user,$password);
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
// 修改数据库名称
mysql_select_db($dbname, $conn);

?>