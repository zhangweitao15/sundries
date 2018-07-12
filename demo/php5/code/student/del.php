<?php
include_once 'checksession.php';
header('content-type:text/html; charset=utf-8'); 
// 1. 接收get发送的数据
$sno = $_GET['sno'];
// 2. 链接服务器 
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 3. 设置字符集
mysqli_query($conn, 'set names utf8');
// 4. 编写sql 语句
$sql = "delete from student where sno=$sno";
// 5. 执行sql语句
$result_bool = mysqli_query($conn, $sql);
die($result_bool);
// 6. 根据结果提示成功/失败
if($result_bool) {
    echo '添加数据成功';
} else {
    echo '数据添加失败';
};
header('refresh:2;url=list.php');


// update student set sname='',sage=''wheret son=6
// readonly

// $sno = $_GET['sno'];
// //2 拼接sql语句
// $sql = "delete from student where sno=$sno";
// // 链接mysql 服务器并执行sql
// $conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// mysqli_query($conn, 'set names utf8');
// $result_bool = mysqli_query($conn, $sql);
// // 根据结果提示成功/失败
// if($result_bool) {
//     echo '删除成功';
// } else {
//     echo '删除失败';
// };
// header('refresh:2;url=list.php');
?>
