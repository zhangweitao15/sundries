<?php 
header('content-type:text/html;charset=utf-8');
include_once 'checksession.php';
//接收post 提交的数据
$sno = $_POST['sno'];
$sname = $_POST['sname'];
$sage = $_POST['sage'];
$sgender = $_POST['sgender'];
$semail = $_POST['semail'];
$stel = $_POST['stel'];
// 链接服务器
$conn = mysqli_connect('localhost', 'root', 'root','stuby');
// 设置字符集
mysqli_query($conn, 'set names tuf8');
// 拼接SQL语句
$sql = "update student set sname='$sname', sage='$sage', sgender='$sgender', semail='$semail', stel='$stel' where sno=$sno";
// 设置sql语句
$result_bool = mysqli_query($conn, $sql);
// die($result_bool);
// 判断是否修改成功
if($result_bool) {
    echo "修改完成";
    header('refresh:2;url=list.php');
} else {
    echo "修改失败";
    header('refresh:2;url=alter.php');
}

?>