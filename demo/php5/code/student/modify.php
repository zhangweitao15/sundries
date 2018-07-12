<meta charset="UTF-8">

<?php
include_once 'checksession.php';
// 1. 接收表单提交的数据

$sno = $_POST['sno'];
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$sgender = $_POST['sgender'];
$semail = $_POST['semail'];
$stel = $_POST['stel'];

// 编写sql 语句 
$sql = "update student set sname='$sname',sage=$sage,sgender='$sgender',semail='$semail',stel='$stel' where sno=$sno";
// die($sql);

// 链接服务器
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 设置字符集
mysqli_query($conn, 'set names utf8');
// 执行sql
$result_xg = mysqli_query($conn, $sql);
// die($result_xg)

//根据返回值判断
if($result_xg) {
    echo '修改成功';
    header('refresh:2;url=list.php');
} else {
    echo '修改失败';
    header('refresh:2;url=edit.php');
};
//失败时跳转到 edit.php 页面 并且要将学号传递回去


?>