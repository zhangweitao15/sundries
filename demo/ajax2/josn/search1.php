<?php
// 1. 接收数据
$name = $_POST['key'];
// 2. 编写SQL语句 
$sql = "select * from ali_admin where admin_email like '%$name%'";
// 3. 链接服务器, 选择数据库 设置字符集;
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
// 4. 执行SQL语句  
$recult_obj = mysqli_query($conn, $sql);
// 处理返回结果
// 2. 在循环外创建一个空数组
$arr = array();
// 1. sql 执行之后返回的结果为对象 需要通过循环将转换为二维数组(正常输出是一维数组)
while($row = mysqli_fetch_assoc($recult_obj)) {
    // 1.2 在循环中将对象中的值依次取出追加到 空数组中 
    array_push($arr, $row);
};
// 3. 循环结束得到二维 数组  利用 josn_encode()方法将二维数组转换为 json字符串返回给前端;
echo json_encode($arr);
?>