<?php
session_start();
if(empty($_SESSION)) {
    echo "您尚未登录, 请登录后再访问";
    header('refresh:1.5;url=login.html');
    die();
}
?>