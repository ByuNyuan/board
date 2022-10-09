<?php
include_once "./connect.inc.php";
//include_once "./config.inc.php";
$content = $_POST;
$id = $content["delete_message"];
//var_dump($id);
if ($id == "") {
    return false;
}
//var_dump($content["id"]);
//var_dump($id);
//var_dump($link);
try {
    $sql = "DELETE FROM $tbname
    WHERE id=$id";
    $conn->exec($sql);
    $sql = "UPDATE $tbname
    SET id=id-1
    WHERE id>$id";
    $conn->exec($sql);
    header("Location:./index.php");

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}