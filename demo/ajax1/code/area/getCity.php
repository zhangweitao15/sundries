<?php
// 1. 接收省id
$id = $_GET['id'];
//通过 省id 获取数据表中的市的数据
// 2. 链接服务器 并选择库
$conn =mysqli_connect('localhost', 'root', 'root', 'stuby');
// 3. 设置字符集
mysqli_query($conn, 'set names utf8');
// 4. 编辑sql语句
$sql = "select * from china where pid=$id";
// 4.1. 执行sql 
$recult_obj = mysqli_query($conn, $sql);
// 5. 处理返回结果 (将查询结果拼接我option字符串);
// 5.1. 首先定义一个变量来承接拼接
$str = '<option>--请选择--</option>';
//因为数据不止一个所以这里需要一个while循环
while ($row = mysqli_fetch_assoc($recult_obj)) {
    $str .= "<option value='{$row['id']}'>{$row['name']}</option>";
}
echo $str
?>