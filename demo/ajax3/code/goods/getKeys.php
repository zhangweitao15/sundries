<?php
// 接收数据 
$name = $_GET['keyword'];
// 编写jsq字符串
$sql = "select * from goods_key where key_name like '%$name%'";
// echo $sql;
// 链接服务器 设置字符集  执行SQL
$conn = mysqli_connect('127.0.0.1', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
$recult_obj = mysqli_query($conn, $sql);
// 处理返回结果 用wihtel循环将对象直接转为二维数组
// 定义空数组承接一维数组// 返回结果是对象 实现将结果转换为一维数组 
//再转为二维数组 最后将二维数组转换为json字符串
$arr = array();
while ($row = mysqli_fetch_assoc($recult_obj)) {
    array_push($arr, $row);
};
// 调用json_encode函数将二维数组转换为json对象返回给前端
echo json_encode($arr);
?>