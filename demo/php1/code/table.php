<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        * {
            list-style: none;
        }
        h1 {
            background: #ccc;
            height: 150px;
            line-height: 150px;
            text-align: center;
        }
        .box {
            width: 800px;
            background : #eee;
            margin: 5px auto;
        }
        .box>p {
            height: 50px;
            line-height: 50px;
            font-size: 18px;
            background: #aaa;
        }
        p {
            text-align : center;
        }
        .box>p>span {
            margin: 0 80px;
        }
        img {
            width: 180px;
        }
        ul {
            
        }
        li {
            display : inline-block;
            margin :  15px 8px;
        }
        a {
            text-decoration : none;
        }
    </style>
</head>
<body>
    <?php $arr = [
               0 => ['src' => './img/1.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               1 =>  ['src' => './img/2.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               2 =>  ['src' => './img/3.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               3 =>  ['src' => './img/4.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               4 =>  ['src' => './img/5.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               5 =>  ['src' => './img/6.jpg', 'intro'=> '描述', 'px'=>'1900*1080'],
               6 =>  ['src' => './img/7.jpg', 'intro'=> '描述', 'px'=>'1900*1080']
            ]?>
    <h1>王者荣耀人物介绍</h1>
    <div class="box">
        <p>
            <span>战士</span>
            <span>法师</span>
            <span>刺客</span>
        </p>
        <ul>
            <?php foreach ($arr as $value) { ?>
            <li>
                <a href="<?php echo $value['src']; ?>">
                    <img  src="<?php echo $value['src']; ?>" alt="">
                    <p>
                        <span><?php echo $value['intro']; ?></span>
                        <span><?php echo $value['px']; ?></span>
                    </p>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
        

</body>
</html>