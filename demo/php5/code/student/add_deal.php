<meta charset="UTF-8">
<?php
include_once 'checksession.php';
$sanme = $_POST['sname'];
$sage = $_POST['sage'];
$sgender = $_POST['sgender'];
$semail = $_POST['semail'];
$stel = $_POST['stel'];
// 2 
$sql = "insert into student values(null, '$sanme', $sage, '$sgender', '$semail', '$stel')";
$conn = mysqli_connect('localhost','root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
$result_bool =mysqli_query($conn,$sql);
if($result_bool) {
    echo "添加成功";
    header('refresh:1;url=list.php');
} else {
    echo "添加失败";
    header('refresh:2;url=add.html');
};
?>