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
// 1. 链接服务器;
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 2. 设置字符集;
mysqli_query($conn, 'set names utf8');
// 3. 设置SQL语句;
$sql = 'select * from student';
$result_obj = mysqli_query($conn, $sql);
// 4. 处理返回数据
// 5. 关闭链接;

?>
        <table border="1" width="800">
            <thead>
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>年龄</th>
                    <th>性别</th>
                    <th>邮箱</th>
                    <th>电话</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <a href="add.php">添加</a>
                <?php while($row = mysqli_fetch_assoc($result_obj)) { ?>
                <tr>
                    <td>
                        <?php echo $row['sno'] ?>
                    </td>
                    <td>
                        <?php echo $row['sname'] ?>
                    </td>
                    <td>
                        <?php echo $row['sage'] ?>
                    </td>
                    <td>
                        <?php echo $row['sgender'] ?>
                    </td>
                    <td>
                        <?php echo $row['semail'] ?>
                    </td>
                    <td>
                        <?php echo $row['stel'] ?>
                    </td>
                    <td>
                        <a href="del.php?sno=<?php echo $row['sno'] ?>" onclick="return confirm('您确定删除改学生吗?')">删除</a>
                        <a href="edit.php?sno=<?php echo $row['sno'] ?>">编辑</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>

</html>