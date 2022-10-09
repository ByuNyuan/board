<?php
include_once "./connect.inc.php";
include_once "./save.php";
try {
    $sql = "SELECT * FROM $tbname";
    $result = $conn->prepare($sql);
    $result->execute();
    $message = $result->fetchALL();
    //print_r($message);
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
return $message;
