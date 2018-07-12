<?php 
// 在表中随机取出一条数据
$sql = "select* from student order by rand() limit 0,1";
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
$recult_obj = mysqli_query($conn, $sql);
$student_info = mysqli_fetch_assoc($recult_obj);
echo "我叫" . $student_info['sname'].", 今年". $student_info['sage']."岁";
?>