<meta charset="UTF-8">
<?php 
$id =  $_GET['id'];
//获取data中的字符
$str = file_get_contents('./data.txt');
//转换数组
$arr = unserialize($str);
// print_r($arr);
//删除数组
unset($arr[$id]);
//转换为字符串
$str = serialize($arr);
file_put_contents('data.txt', $str);
echo '壁纸删除成功';
header('refresh:2; url=get.php');
?>