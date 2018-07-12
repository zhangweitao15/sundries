<?php 
// echo $_GET['uname'];
//接收前端
$ussername = $_post['uname'];
// 2. 模拟
if ($ussername == 'zs' || $ussername == 'ls') {
    //被占用
    echo 2;
} else {
    //未占用
    echo 1;
}
?>