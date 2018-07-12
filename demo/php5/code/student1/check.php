<?php
header('content-type:text/html;charset=utf-8');
// 1. 接收登录界面代码
$name = $_POST['usename'];
$pwd = $_POST['password'];
// 2. 链接服务器
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
// 3. 设置字符集
mysqli_query($conn, 'set names utf8');
// 4. 编写SQL代码
$sql = "select * from ali_admin where admin_email='$name'";
// die($sql);
// 4.1. 执行sql代码
$resturn_obj = mysqli_query($conn, $sql);
// 5. 返回结果处理
$resturn_arr = mysqli_fetch_assoc($resturn_obj);
// 6. 判断账号是否正确
if (empty($resturn_arr)) {
    echo "账号错误,请重新输入";
    header('refresh:1.5;url=login.html');
    die();
} else {
// 7. 判断密码是否正确 
    if ($pwd == $resturn_arr['admin_pwd']) {
        echo "登录成功";
        //开启session 
        session_start();
        //设置session
        $_SESSION['id'] = $resturn_arr['admin_id'];
        $_SESSION['name'] = $resturn_arr['admin_nickname'];
        $_SESSION['email'] = $resturn_arr['admin_email'];
        header('refresh:1.5;url=list.php');
        die();
    } else {
        echo "密码错误";
        header('refresh:1.5;url=login.html');
        die();
    }
}
?> 