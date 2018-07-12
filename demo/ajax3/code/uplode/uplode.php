<?php
// 将文件从临时位置移动到目标位置
// 参数1 临时路径
// 参数2 移动到的路径
// 返回值  移动成功 返回true 移动失败返回false
// print_r($_FILES);
if(move_uploaded_file($_FILES['f']['tmp_name'],'./' . $_FILES['f']['name'])) {
    echo 1;
} else {
    echo 2;
};

?>