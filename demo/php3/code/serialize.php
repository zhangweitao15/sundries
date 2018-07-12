<?php 
$img_list = [
    ['url'=>'./img/1.jpg', 'name'=>'妲己', 'size'=>'1920*1080'],
    ['url'=>'./img/2.jpg', 'name'=>'安其拉', 'size'=>'1920*1200'],
    ['url'=>'./img/3.jpg', 'name'=>'刘邦', 'size'=>'1920*1080']
];
$a = serialize($img_list);
echo $a;
file_put_contents('./data.txt', $a);


?>