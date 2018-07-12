<?php
//检测session是否存在
session_start();
if (empty($_SESSION['nickname'])) {
    echo "您尚未登录, 请登录后再访问";
    header('refresh:2;url=login.html');
    die();
}
?>