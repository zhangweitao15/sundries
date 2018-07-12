<?php
//接收市的id 
$id = $_GET['id'];
// 1. 链接服务器 并选择数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 2. 设置字符集 
mysqli_query($conn, 'set names utf8');
// 3. 编辑sql 
$sql = "select * from china where pid=$id";
// 3.1 设置sql 
$recult_obj = mysqli_query($conn, $sql);
// 4. 处理返回结果 (拼接成option)
// 定义变量 承接拼接后的字符串
$str = '<option>--请选择--</option>';
while ($row = mysqli_fetch_assoc($recult_obj)) {
    $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
}
echo $str;
?>