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
    $info = ['name'=> 'zs', 'age'=>18 , 'sex'=>'nan'];
    echo $info['name'];
    foreach ($info as $a=>$b) {
        echo $a . '=' . $b . '<br>';
    };
    $arr = ['zs', 'ls','ww'];
    foreach ($arr as $k=>$v) {
        echo $k . '=' . $v . '<br>';
    }
    ?>
</body>
</html>