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
//
$conn = mysqli_connect('localhost','root', 'root');
// 2 选择要使用的数据库
//参数1 数据库链接子元
mysqli_select_db($conn, 'stuby');

//设置字符集
mysqli_query($conn, 'set names utf8');
//4 执行sql 语句
//返回值 
//如果执行的是增删改则返回的是布尔值 ,执行成功 返回true 失败 false
//如果执行的是查询 则返回的是 结果对象
$sql = 'select * from ali_cate';
$result_obj = mysqli_query($conn, $sql);
// print_r($result_obj);


// 5 处理查询结果
while( $row = mysqli_fetch_assoc($result_obj)) {
    print_r($row);
};


// 6 关闭链接资源
mysqli_close($conn);
?>
    
</body>
</html>