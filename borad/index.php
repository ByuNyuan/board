<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    ul {
        list-style: none;
    }
    </style>
    <script>
    function sub1() {
        var x = document.forms["formId1"]["message"].value;
        if (x == null || x == "") {
            alert("请输入内容");
            return false;
        }
    }

    function sub2() {
        var x = document.forms["formId2"]["delete_message"].value;
        if (x == null || x == "") {
            alert("请输入要删除的序号");
            return false;
        }
        if (isNaN(x)) {
            alert("请输入数字");
            return false;
        }
    }
    </script>

</head>

<body>
    <h2>留言板</h2>
    <form action="./save.php" method="POST" id="formId1" onsubmit="return sub1()">
        <input type="text" name="message" value="">
        <input type="submit" value="提交" name="sname">
        <br>
    </form>
    <form action="./delete.php" method="POST" id="formId2" onsubmit="return sub2()">
        <label for="text">
            请输入你要删除的留言的序号:<br><input type="text" id="text" name="delete_message"></label>
        <input type="submit" value="删除" name="dname">
    </form>

    <ul>
        <?php
include_once "./query_message.ini.php";
//var_dump($message);
$num = 1;
foreach ($message as $i) {
    echo "<li>" . $num . ".<br>" . $i["message"] . "&nbsp&nbsp&nbsp(序号：" . $i["id"] . ")" . "</li>";
    $num++;
}
?>
    </ul>
</body>

</html>