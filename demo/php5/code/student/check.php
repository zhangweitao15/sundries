<meta charset="UTF-8">
<?php
// 1. 接收
$name = $_POST['username'];
$pwd = $_POST['password'];
// 2. 验证
// 2.1. 
$sql = "select * from ali_admin where admin_email='$name'";
// 
$conn = mysqli_connect('localhost', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');

$resuli_obj = mysqli_query($conn, $sql);
$admin_info = mysqli_fetch_assoc($resuli_obj);

// 3. 验证密码
// 4. 天转到lest.php
if (empty($admin_info)) {
    // //用户名错误
    echo "账号错啦";
    header('refresh:2;url=login.html');
    die();
} else {
    //用户名正确
    // 如果$admin_info 不为空则$admin_info['admin_pwd']就保存了该用户的密码
    //用户表单接收到的密码 和$admin_info['admin_pwd']老表表
    if($pwd == $admin_info['admin_pwd'] ) {
        echo "登录成功";
        //开启session
            session_start();
        //设置session 
        $_SESSION['id'] = $admin_info['admin_id'];
        $_SESSION['email'] = $admin_info['admin_email'];
        $_SESSION['nickname'] = $admin_info['admin_nickname'];
        die()
        header('refresh:2;url=list.php');
        die();
    } else {
        echo "密码错啦";
        header('refresh:2;url=login.html');
        die();
    };
    
}
?>