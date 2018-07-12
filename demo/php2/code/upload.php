<meta charset="UTF-8">
    <?php 
    print_r($_FILES);
    //判断是否上传文件
    // if ($_FILES['z']['error'] == 0 ) {
    //     //判断是否是图片
    //     $arr = ['image/jpeg','image/png','image/gif'];
    //     if  (in_array($_FILES['z']['type'], $arr) ) {
    //         $index = strrpos($_FILES['z']['name'], '.');
    //         $ext = substr($_FILES['z']['name'], $index);
    //         //[拼接文件名]
    //         $lse = time() . rand(10000, 99999999) . $ext;
    //         //更改图片路径
    //         move_uploaded_file($_FILES['z']['tmp_name'],'./img/' . $lse);
    //         echo '文件传输成功';
    //         header('refresh:2;url=upload.html');
    //     } else {
    //         echo '文件错误请重新上传';
    //         header('refresh: 3;url=upload.html');
    //     }
    // } else {
    //     echo '文件传输失败';
    //     header('refresh: 3; url=upload.html');
    // }
    ?>
