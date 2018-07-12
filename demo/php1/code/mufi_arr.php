<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
   $arr = [
        0 => ['张三丰', '张三疯子'],
        1 => ['李四狗', '李四锚'],
        2 => ['大刀王五', '小刀王五']
   ];
    foreach ($arr as $value) {
        echo $value[0] . $value[1] . '<br>';
    }
    ?>
</body>
</html>