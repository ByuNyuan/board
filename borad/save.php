<?php
include_once "./connect.inc.php";
//include_once "./config.inc.php";
$content = $_POST;
$message = $content["message"];
//var_dump($message);
if ($message == "") {
    return false;
}
//var_dump($content["message"]);
//var_dump($message);
//var_dump($link);
try {
    $sql = "INSERT INTO $tbname (message)
  VALUES ('$message')";
    $conn->exec($sql);
    header("Location:./index.php");

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
