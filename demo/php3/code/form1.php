    <meta charset="UTF-8">
<?php
//获取form.html提交的信息
$file = $_FILES;
print_r($file);
// 判断文件是否上传成功
if ($_FILES['pis']['error'] == 0 ) {
    //判断文件是否是图片
    $arr = ['image/jpeg', 'image/png', 'image/gif'];
    if (in_array($_FILES['pis']['type'], $arr)) {
        //获取文件类型名称
        $is = strrpos($_FILES['pis']['name'], '.');
        //重新给文件命名
        $enx = substr($_FILES['pis']['name'], $is);
        $new_name = time() . rand(10000, 999999) . $enx;
        //将文件储存到img中
        $url = './img/'.$new_name;
        move_uploaded_file($_FILES['pis']['tmp_name'], $url);
        echo '文件传输成功';
        // header('refresh:2; url=table.php');
    } else {
        //不是图片 
        echo '文件格式错误请重新上传';
        header('refresh:2; url=form.html');
        die();
    }
} else {
    // 传输失败
    echo '文件错误请重新上传';
    header('refresh:2; url=form.html');
    die();
}
//获取添加的数据源
$name = $_FILES['pis']['name'];
$size = $_FILES['pis']['size'];
$url = $_FILES['pis']['tmp_name'];
echo $url;
//将数据组成数组
$new_arr = [
    'name'=> $_POST['name'],
    'size'=>$_POST['size'],
    'url'=>$_FILES['pis']['name']
];
// 实现添加文件
// 获取data中的数据
$str = file_get_contents('./data.txt');
//转换
$arr = unserialize($str);
//将数组追加到 大数组中
array_push($arr, $new_arr);
//序列化
$str = serialize($arr);
//覆盖写入到 data中 
print_r(file_put_contents($str)) ;
?>