<?php
include_once "./config.inc.php";
$severname = "localhost";
$username = "root";
$password = "liugy0818";
//$dbname = "message board";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "连接成功";
    $conn->exec("SET NAMES utf8");

} catch (PDOException $e) {
    echo $e->getMessage();
}
