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
    // 接收list a 标签传过来的 sno
    $sno =$_GET['sno'];
    // 1. 链接数据库
    $conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
    // 2. 设置字符集
    mysqli_query($conn, 'set names utf8');
    // 3. 设置SQL语句
    // 3.1 拼接sql语句
    $sql = "select * from student where sno=$sno";
    // die($sql);
    $result_obj = mysqli_query($conn, $sql);
    $result_a = mysqli_fetch_assoc($result_obj);
    // print_r($result_a);
    // die()
    // 4. 处理返回结果
    // 5. 关闭链接
    ?>

    <form action="modify.php" method="post">
       学号: <input type="text" name="sno" readonly value="<?php echo $result_a['sno']; ?>"><br>
       姓名: <input type="text" name="sname" value="<?php echo $result_a['sname']; ?>"><br>
       年龄: <input type="text" name="sage"  value="<?php echo $result_a['sage']; ?>"><br>
       性别: <input type="text" name="sgender"  value="<?php echo $result_a['sgender']; ?>"><br>
       邮箱: <input type="text" name="semail" value="<?php echo $result_a['semail']; ?>"><br>
       手机: <input type="text" name="stel" value="<?php echo $result_a['stel']; ?>"><br>
            <input type="submit" value="修改">
    </form>
</body>
</html>