<?php
header('content-type:text/html;charset=utf-8');
include_once 'checksession.php'
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$sgender = $_POST['sgender'];
$semail = $_POST['semail'];
$stel = $_POST['stel'];
// die($stel)
// 2. 链接服务器 和数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 3. 设置字段
mysqli_query($conn, 'set names utf8');
// 4. 编写sql语句
$sql = "insert into student value(null, '$sname', $sage, '$sgender', '$semail', '$stel')";
// 4.1. 执行sql语句
$rected_bool = mysqli_query($conn, $sql);
// 5. 关闭链接
mysqli_close($conn);
// die($rected_bool);
// 判断是否修改成功
if ($rected_bool) {
    echo "数据上传成功";
    header('refresh:1.5;url=list.php');
    die();
} else {
    echo "添加失败";
    header('refresh:1.5;url=add.pho');
}

?>