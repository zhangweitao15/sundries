<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=oang, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $str = file_get_contents('./data.txt');
    
    $arr = unserialize($str);
    // print_r($arr); 
    $i = 1;
    ?>
    <h1>王者荣耀壁纸列表</h1>
    <hr/>
    <table border="1"; width="800" style=" border-collapse: collapse; text-align: center; ">
       
        <theda>
            <tr>
                <th>编号</th>
                <th>名称</th>
                <th>图片</th>
                <th>尺寸</th>
                <th>操作</th>
            </tr>
        </theda>
        <tbody>
            <?php foreach ($arr as $k=>$v) { ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $v['name']; ?></td>
                <td><img src="<?php echo $v['url'] ?>"  width="60"></td>
                <td><?php echo $v['size'] ?></td>
                <td><a href="del.php?id=<?php echo $k; ?>">删除</a></td>
            </tr>
            <?php 
            $i++;
            }
             ?>
            
        </tbody>
    </table>
</body>
</html>