<?php 
// 1. 链接服务器, 选择数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 2. 设置字符集
mysqli_query($conn, 'set names utf8');
// 3. 编写SQL语句 
$sql = "select * from student order by rand() limit 0,1";
// 3.2. 执行SQL语句
$recult_obj = mysqli_query($conn, $sql);
// 4. 处理返回结果
$recult_arr = mysqli_fetch_assoc($recult_obj);
// 5. 关闭连接

// 6. 拼接字符串返回
echo "我叫" . $recult_arr['sname'] . ", 今年" . $recult_arr['sage'] . "岁";
?>