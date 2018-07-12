<?php
$n = $_POST['n'];
$b = $_POST['b'];
$s = $_POST['s'];
if($n && $b && $s) {
    // 链接服务器并选择数据库
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// // 设置字符集
mysqli_query($conn, 'set names utf8');
// // 编辑sql代码
$sql = "insert into ali_cate value(null, '$n', '$b', '$s')";
// // 执行SQL 代码
$ercult_bool = mysqli_query($conn, $sql);
echo $ercult_bool;
} else {
    die(2);
};

?>