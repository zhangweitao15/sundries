<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once 'checksession.php';
// 接收sno
$sno = $_GET['sno'];
// 2. 拼接sql 语句 根据sno 查询student 表中的数据
$sql = "select * from student where  sno=$sno";
// 3. 链接mysql服务器并执行sql 
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 返回的是结果对象;
$result_obj = mysqli_query($conn, $sql);
$student_info = mysqli_fetch_assoc($result_obj);
// die($result_obj)
?>
    <form action="modify.php" method="post">
        学号: <input type="text" name="sno" readonly value="<?php echo $student_info['sno']; ?>"><br>
        姓名: <input type="text" name="sname" value="<?php echo $student_info['sname']; ?>" ><br>
        年龄: <input type="text" name="sage" value="<?php echo $student_info['sage']; ?>" ><br>
        性别: <input type="text" name="sgender" value="<?php echo $student_info['sgender']; ?>" ><br>
        邮箱: <input type="text" name="semail" value="<?php echo $student_info['semail']; ?>" ><br>
        电话: <input type="text" name="stel" value="<?php echo $student_info['stel']; ?>" ><br>
         <input type="submit" value="修改"><br>
    </form>
</body>
</html>
