<?php
// 接收选项卡名称
$name = $_POST['keyword'];
// 拼接SQL语句   不同的选项卡名称有不同的SQL语句
switch ($name) {
    case '推荐商品':
        $sql = 'select * from sp_goods where goods_tj=1';
    break;
    case '电脑整机':
        $sql = 'select * from sp_goods where goods_cateid=1';
    break;
    case '电脑配件':
        $sql = 'select * from sp_goods where goods_id>15';
    break;
    case '办公打印':
        $sql = 'select * from sp_goods where goods_cateid in (1,2)';
    break;
    case '网络产品':
        $sql = 'select * from sp_goods where goods_id<20';
    break;
};
// 链接服务器 执行SQL语句  
$conn = mysqli_connect('127.0.0.1', 'root', 'root', 'stuby');
mysqli_query($conn, 'set names utf8');
// 将结果对象转为二维数组 再转为jaon 返回给前端
$recult_obj = mysqli_query($conn, $sql);
$arr = [];
while ($row = mysqli_fetch_assoc($recult_obj) ) {
    array_push($arr, $row);
};
echo json_encode($arr);
?>