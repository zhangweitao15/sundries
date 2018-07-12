<?php
//接收
//  print_r($_POST);
//  die();
$name = $_POST['key'];
//拼接sql
$sql = "select * from ali_admin where admin_email like '%$name%'";
//链接 选择数据库 执行sql
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
$recult_obj = mysqli_query($conn, $sql);
//将结果对象转为二维数组
$arr = array();
while ($row = mysqli_fetch_assoc($recult_obj)) {
    //将$row 追加到
    array_push($arr, $row);
};
//返回结果
echo json_encode($arr);
?>