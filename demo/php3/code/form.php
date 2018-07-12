<meta charset="UTF-8">
<?php
    // 1处理上传文件
    // 将上传的文件改名并保存到 img文件当中
    // 1.1 判断文件是否为空
    if($_FILES['pic']['error'] == 0) {
    //    print_r($_FILES);
        //1.3定义数组 储存图片类型
        $arr = ['image/jpeg', 'image/png', 'image/gif'];
        //1.4判断上传是文件是否为图片文件
        if(in_array($_FILES['pic']['type'],$arr)) {
            //1.6条件满足进行文件保存操作 
            // 文件 扩展名获取
            $index = strrpos($_FILES['pic']['name'], '.'); // 获取文件名最后一个点的索引
            //截取文件类型部分
            $ext = substr($_FILES['pic']['name'], $index);
            //将文件重新命名
            $new_file = time() . rand(10000, 9999999) . $ext;
            $pam = './img/' . $new_file;
            //将文件保存在img中;
            move_uploaded_file($_FILES['pic']['tmp_name'], $pam);
            echo '壁纸上传成功';
            header('refresh:2; url=get.php');
            // exit();
        } else {
            //1.5in_array 判断对比type属性判断 文件不是图片文件
            echo '文件传输错误,请重新输入';
            header('refresh:2; url=form.html');
            exit();
        }
    } else {
        //error不等于零 没有上传 提示重新输入
        echo '文件传输错误,请重新输入';
        header('refresh:2; url=form.html');
        exit();
    }
    // 2 获取表单的其他数据
    $name = $_POST['name'];
    $size = $_POST['size'];
    //3 将尺寸/ 名称 图片地址构造成一个数组
    $data = ['name'=> $name, 'size'=> $size, 'url'=>$pam];
    //将data.txt的数据取出反序列化伪数组
    $str = file_get_contents('data.txt'); // 取出数据
    $arr = unserialize($str);
    //将数组添加进去;   
    array_push($arr, $data);
    // print_r($arr);
    //将数组序列化转换为 字符串
    $str = serialize($arr);
    //覆盖写入到回data.txt中
    $data_1 = file_put_contents('data.txt', $str);
    // echo $str;
    

?> 