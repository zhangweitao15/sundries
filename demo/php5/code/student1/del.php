<?php 
header('content-type:text/html;charset=utf-8');
include_once 'checksession.php';
// 接受结son
$sno = $_GET['sno'];
// die($sno);
// 链接服务器
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 设置字段
mysqli_query($conn, 'set names utf8');
// 设置sql语句
$sql = "delete from student where sno=$sno";
//执sql语句
$result_bool = mysqli_query($conn, $sql);
// die($result_bool);
// 判断结果是否成功;
if ($result_bool) {
    echo "删除成功";
    header('refresh:2;url=list.php');
} else {
    echo "删除失败";
    header('refresh:2;url=list.php');
};
// 关闭链接
mysqli_close($conn);

?>