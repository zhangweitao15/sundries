<?php 
$set = file_get_contents('./a.txt');
echo $set;
$set = file_put_contents('./a.txt', '这是写入的内容', FILE_APPEND)
?>
